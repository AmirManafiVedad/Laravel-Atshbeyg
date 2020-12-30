@extends('panel-admin.Panel-Admin')

@section('statistics')

    <div class="row">
        <div class="col-3 ">
            <div class="_Statistics_green">
                <h5 class="font26">تعداد کاربران عادی</h5>
                @if($userscount)
                    <p class="font50">{{$userscount}}</p>
                @else
                    <p class="font50" style="color: white">0</p>
                @endif
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_dark">
                <h5 class="font26">تعداد کاربران عادی امروز</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_green">
                <h5 class="font26">تعداد درخواست ها</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_dark">
                <h5 class="font26">بازدید کاربران عادی</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>


@endsection

@section('content')
    <h1 class="_Table_admin_h1">لیست کل کاربران عادی</h1>
    <table class="_Table_admin">
        <tr>
            <th class="font20 _Table_admin_1 _Table_i">ردیف</th>
            <th class="font20 _Table_admin_2 _Table_Usersall_name">نام کاربری</th>
            <th class="font20 _Table_admin_3 _Table_Usersall_email">ایمیل</th>
            <th class="font20 _Table_admin_4 _Table_Usersall_avatars">نقش</th>
            <th class="font20 _Table_admin_5 _Table_Usersall_time">تاریخ عضویت</th>
            <th class="font20 _Table_admin_6 _Table_Usersall_operation">عملیات</th>
        </tr>
        @php
            $i = 1
        @endphp
        @foreach($users as $user)
            <tr>
                <td class="_Table_admin_1_1 _Table_i font18">{{$i++}}</td>
                <td class="_Table_admin_2_2 _Table_Usersall_name" style="font-size: 21px;">{{$user->username}}</td>
                <td class="_Table_admin_3_3 _Table_Usersall_email" style="font-size: 21px;">{{$user->email}}</td>
                <td class="font20 _Table_admin_4_4 _Table_Usersall_avatars font18">
                    کاربر عادی
                </td>
                <td class="_Table_admin_5_5 _Table_Usersall_time font18">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)}}</td>
                <td class="_Table_admin_6_6 _Table_Usersall_operation font18">
                    <div class="_Table_admin_operation_view">
                        <a href="" title="مشاهده"><i class="fas fa-id-card font22"></i></a>
                    </div>
                    <div class="_Table_admin_operation_edit">
                        <a href="{{url('admin/users/edituser' , $user->id)}}" title="ویرایش" class="_Usersall_Operation_Edit"><i class="fas fa-user-edit font22"></i></a>
                    </div>
                    <button type="button" class="_Table_admin_operation_delete" data-toggle="modal" data-target="#exampleModalLong">
                        <i class="fas fa-user-times _Table_admin_operation_delete font22"></i>
                    </button>
                    <!-- Modal -->

                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                    آیا مطمئین هستید که کابر <span class="_Model_text_name font19"><b>{{$user->username}}</b></span> را حذف کنید ؟
                                    <br>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary _Btn_delete_model_close font16" data-dismiss="modal">بستن</button>
                                    <form method="post" action="{{url('admin/users/'.$user->id)}}">
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
                {{$users->links()}}
            </div>
@endsection
