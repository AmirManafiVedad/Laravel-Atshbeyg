@extends('panel-admin.Panel-Admin')

@section('statistics')

    <div class="row">
        <div class="col-3 ">
            <div class="_Statistics_green">
                <h5 class="font26">تعداد کل مدیران</h5>
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
                <h5 class="font26">تعداد پست های تایید شده</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_green">
                <h5 class="font26">تعداد بررسی کامنت ها</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

        <div class="col-3">
            <div class="_Statistics_dark">
                <h5 class="font26">تعداد بازدید مدیران</h5>
                <i class="fad fa-analytics font32 "></i>
            </div>
        </div>

@endsection

@section('content')
    <h1 class="_Table_admin_h1">لیست کل مدیر ها</h1>
    <table class="_Table_admin">
        <tr>
            <th class="font20 _Table_admin_1 _Table_i">ردیف</th>
            <th class="font20 _Table_admin_2 _Table_img">عکس</th>
            <th class="font20 _Table_admin_3 _Table_Usersall_name">نام و نام خانوادگی</th>
            <th class="font20 _Table_admin_4 _Table_usersall_username">نام کاربری</th>
            <th class="font20 _Table_admin_5 _Table_Usersall_email">ایمیل</th>
            <th class="font20 _Table_admin_6 _Table_Usersall_avatars">نقش</th>
            <th class="font20 _Table_admin_7 _Table_Usersall_time">تاریخ عضویت</th>
            <th class="font20 _Table_admin_8 _Table_Usersall_operation">عملیات</th>
        </tr>
        @php
            $i = 1
        @endphp
        @foreach($users as $user)
            <tr>
                <td class="_Table_admin_1_1 _Table_i font18">{{$i++}}</td>
                @if($user->photo_id)
                    <td class="_Table_admin_2_2 _Table_img font18">
                        <img src="{{url('/Image/Profileuser',$user->photo->path)}}">
                    </td>
                @else
                    <td class="_Table_admin_2_2 _Table_img font18">
                        -
                    </td>
                @endif
                <td class="_Table_admin_3_3 _Table_Usersall_name font18">{{$user->firstname }} {{$user->lastname ?? '-'}}</td>
                <td class="_Table_admin_4_4 _Table_usersall_username" style="font-size: 21px;">{{$user->username}}</td>
                <td class="_Table_admin_5_5 _Table_Usersall_email" style="font-size: 21px;">{{$user->email}}</td>
                <td class="_Table_admin_6_6 _Table_usersall_avatars font18">
                    مدیر
                </td>
                <td class="_Table_admin_7_7 _Table_Usersall_time font18">{{\Hekmatinasser\Verta\Verta::instance($user->created_at)}}</td>
                <td class="_Table_admin_8_8 _Table_Usersall_operation font18">
                    <div class="_Table_admin_operation_view">
                        <a href="" title="مشاهده"><i class="fas fa-id-card font22"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>

            <div class="col-12 _Page_link">
                {{$users->links()}}
            </div>
@endsection
