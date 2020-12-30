@extends('panel-admin.Panel-Admin')

@section('statistics')

    <div class="row">
        <div class="col-3 ">
            <div class="_Statistics_green">
                <h5 class="font26"> تعداد کل کاربران</h5>
                @if($categoriescount)
                    <p class="font50">{{$categoriescount}}</p>
                @else
                    <p class="font50" style="color: white">0</p>
                @endif
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

            <h1 class="_Table_admin_h1">لیست دسته بندی</h1>
            @if(Session::has('createCategories'))
                <div class="_Session_create">
                    <h2 class="font25">{{session('createCategories')}}</h2>
                </div>
            @endif

            @if(Session::has('updateCategories'))
                <div class="_Session_update">
                    <h2 class="font25">{{session('updateCategories')}}</h2>
                </div>
            @endif

            @if(Session::has('deleteCategories'))
                <div class="_Session_delete">
                    <h2 class="font25">{{session('deleteCategories')}}</h2>
                </div>
            @endif

            <table class="_Table_admin">
                <tr>
                    <th class="font20 _Table_admin_1 _Table_i">ردیف</th>
                    <th class="font20 _Table_admin_2 _Table_img">عکس</th>
                    <th class="font20 _Table_admin_3 _Table_categories_name">دسته بندی</th>
                    <th class="font20 _Table_admin_4 _Table_categories_under">زیر دسته بندی</th>
                    <th class="font20 _Table_admin_5 _Table_categories_time">تاریخ</th>
                    <th class="font20 _Table_admin_6 _Table_categories_operation">عملیات</th>
                </tr>
                @php
                    $i = 1
                @endphp
                @foreach($categories as $category)
                    <tr>
                        <td class="_Table_admin_1_1 _Table_i font18">{{$i++}}</td>
                        @if(!is_null($category->photo))
                            <td class="_Table_admin_2_2 _Table_img font18">
                                <img src="{{url('/Image/Categories/'.$category->photo->path)}}">
                            </td>
                        @else
                            <td class="_Table_admin_2_2 _Table_img font18">
                                -
                            </td>
                        @endif
                        <td class="_Table_admin_3_3 _Table_categories_name font18">{{$category->title}}</td>
                        <td class="_Table_admin_4_4 _Table_categories_under font18"></td>
                        <td class="_Table_admin_5_5 _Table_categories_time font18">{{\Hekmatinasser\Verta\Verta::instance($category->created_at)}}</td>
                        <td class="_Table_admin_6_6 _Table_categories_operation font18">

                            <div class="_Table_admin_operation_edit">
                                <a href="{{url('admin/categories/editcategories' , $category->id)}}" title="ویرایش" class="_Usersall_Operation_Edit"><i class="fas fa-user-edit font22"></i></a>
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
                                            آیا مطمئین هستید که دسته بندی <span class="_Model_text_name font19"><b>{{$category->title}}</b></span> حذف کنید ؟
                                            <br>
                                            <br>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary _Btn_delete_model_close font16" data-dismiss="modal">بستن</button>
                                            <form method="post" action="{{url('admin/categories/'.$category->id)}}">
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
                {{$categories->links()}}
            </div>
@endsection
