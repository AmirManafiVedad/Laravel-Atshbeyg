@extends('panel-admin.Panel-Admin')

@section('statistics')

    <div class="row">
        <div class="col-3 ">
            <div class="_Statistics_green">
                <h5 class="font26"> تعداد کل کامنت ها</h5>
                {{--                @if($count)--}}
                {{--                    <p class="font50">{{$count}}</p>--}}
                {{--                @else--}}
                {{--                    <p class="font50" style="color: white">0</p>--}}
                {{--                @endif--}}
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_dark">
                <h5 class="font26">تعداد کاربران امروز</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_green">
                <h5 class="font26">تعداد بازدید کاربران امروز</h5>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_dark">
                <h5 class="font26">تعداد بازدید کاربران مهمان</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>


        @endsection

        @section('content')

            <h1 class="_Table_admin_h1">لیست کامنت ها</h1>

            @if(Session::has('approvedComment'))
                <div class="_Session_update">
                    <h2 class="font25">{{session('approvedComment')}}</h2>
                </div>
            @endif

            @if(Session::has('rejectedComment'))
                <div class="_Session_delete">
                    <h2 class="font25">{{session('rejectedComment')}}</h2>
                </div>
            @endif

            @if(Session::has('deleteComment'))
                <div class="_Session_delete">
                    <h2 class="font25">{{session('deleteComment')}}</h2>
                </div>
            @endif

            <table class="_Table_admin">
                <tr>
                    <th class="font20 _Table_admin_1 _Table_i">ردیف</th>
                    <th class="font20 _Table_admin_2 _Table_img">عکس کاربر</th>
                    <th class="font20 _Table_admin_3 _Table_requestcomment_user">نام ایجاد کننده</th>
                    <th class="font20 _Table_admin_4 _Table_requestcomment_titlepost">متن کامنت</th>
                    <th class="font20 _Table_admin_5 _Table_requestcomment_description">عنوان مطلب</th>
                    <th class="font20 _Table_admin_6 _Table_requestcomment_status">وضعیت</th>
                    <th class="font20 _Table_admin_7 _Table_requestcomment_time">تاریخ عضویت</th>
                    <th class="font20 _Table_admin_8 _Table_requestcomment_operation">عملیات</th>
                </tr>
                @php
                    $i = 1
                @endphp
                @foreach($comments as $comment)
                    <tr>
                        <td class="_Table_admin_1_1 _Table_i font18">{{$i++}}</td>
                        @if($comment->user->photo_id)
                            <td class="_Table_admin_2_2 _Table_img font18">
                                <img src="{{url('/Image/Profileuser',$comment->user->photo->path)}}">
                            </td>
                        @else
                            <td class="_Table_admin_2_2 _Table_postsall_img font18">
                                -
                            </td>
                        @endif
                        <td class="_Table_admin_3_3 _Table_requestcomment_user font20">{{$comment->user->firstname}}{{$comment->user->lastname}}</td>
                        <td class="_Table_admin_4_4 _Table_requestcomment_titlepost font18">{{str_limit($comment->description,85)}}</td>
                        <td class="_Table_admin_5_5 _Table_requestcomment_description font21">{{$comment->post->title}}</td>
                        <td class="_Table_admin_6_6 _Table_requestcomment_status font18">
                            @if($comment->status == 1)
                                <p class="_Table_requestcomment_status_true">منتشر شده</p>
                            @elseif($comment->status == 0)
                                <p class="_Table_requestcomment_status_false">منتشر نشده</p>
                            @endif
                        </td>
                        <td class="_Table_admin_7_7 _Table_requestcomment_time font18">{{\Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>
                        <td class="_Table_admin_8_8 _Table_requestcomment_operation font18">

                            <div class="_Table_admin_operation_view">
                                <a href="{{url('admin/comments/commentpending',$comment->id)}}" title="مشاهده"><i class="fas fa-eye font22"></i></a>
                            </div>

                            <button type="button" class="_Table_admin_operation_approve" data-toggle="modal" data-target="#exampleModalLong">
                                @if($comment->status == 0)
                                    <i class="fas fa-thumbs-up _Table_admin_operation_approve font22"></i>
                                @else
                                    <i class="fas fa-thumbs-down _Table_admin_operation_rejected font22"></i>
                                @endif
                            </button>
                            <br>
                            <!-- Modal -->

                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title _Model_title font23" id="exampleModalLongTitle">هشدار !!</h5>
                                            <button type="button" class="close _Btn_delete" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body _Model_text font17">
                                            <br>
                                            آیا مطمئین هستید که کامنت
                                            <br>
                                            <p class="_Model_text_name font19"><b>{{$comment->description}}</b></p>
                                           @if($comment->status == 0)
                                            فعال کنید ؟
                                            @else
                                            غیر فعال کنید ؟
                                            @endif
                                            <br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary _Btn_delete_model_close font16" data-dismiss="modal">بستن</button>
                                            <form method="post" action="{{url('admin/comments/commentsall/'.$comment->id)}}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-primary _Btn_delete_model font16">
                                                    @if($comment->status == 0)
                                                        فعال کردن
                                                    @else
                                                        غیر فعال کردن
                                                    @endif
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="_Table_admin_operation_delete" data-toggle="modal" data-target="#exampleModalLong1">
                                <i class="fas fa-user-times _Table_admin_operation_delete font22"></i>
                            </button>
                            <!-- Modal -->

                            <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title _Model_title font23" id="exampleModalLongTitle">هشدار !!</h5>
                                            <button type="button" class="close _Btn_delete" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body _Model_text font17">
                                            <br>
                                            آیا مطمئین هستید که کامنت
                                            <br>
                                            <p class="_Model_text_name font19"><b>{{$comment->description}}</b></p>
                                            حذف کنید ؟
                                            <br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary _Btn_delete_model_close font16" data-dismiss="modal">بستن</button>
                                            <form method="post" action="{{url('admin/comments/commentsall/'.$comment->id)}}">
                                                {{csrf_field()}}
                                                {{method_field('delete')}}
                                                <button type="submit" class="btn btn-primary _Btn_delete_model font16">
                                                    حذف کردن
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="col-12 _Page_link">
                {{$comments->links()}}
            </div>

@endsection
