<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('Bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('css/profile/index.css')}}">
    <link rel="stylesheet" href="{{url('css/profile/panel_user.css')}}">
    <link rel="stylesheet" href="{{url('css/profile/information_user.css')}}">
    <link rel="stylesheet" href="{{url('css/profile/menu_user.css')}}">
    <link rel="stylesheet" href="{{url('css/post.css')}}">
    <link rel="stylesheet" href="{{url('css/profile/')}}">
    <title>حساب کاربری</title>
</head>
<body>

    {{-------------  Header Top -------------}}

    <div class="_Header_top">
        <div class="container-fluid">
            <div class="row">
                {{-------------  Logo And Title  -------------}}
                <div class="col-3 _Margin_padding">
                    <div class="_Title_profile">
                        <span class="font18">روستای گردشگری آتش بیگ</span>
                    </div>
                </div>
                {{-------------  Search  -------------}}
                <div class="col-3 _Margin_padding"></div>
                {{-------------  Space  -------------}}
                <div class="col-2 _Margin_padding"></div>
                {{-------------  Alert  -------------}}
                <div class="col-2 _Margin_padding">
                    <div class="_Profile_header_alert">
                        <button class="_Profile_icon_scoials _Profile_icon_round"><i class="fa fa-cog" id="_Profile_setting_icon"></i></button>
                        <button class="_Profile_icon_scoials _Profile_icon_round"><i class="fa fa-envelope" id="_Profile_header_icon"></i></button>
                        <button class="_Profile_icon_scoials _Profile_icon_round"><i class="fa fa-bell" id="_Profile_header_icon"></i></button>
                    </div>
                </div>
                {{-------------  Information And Logout  -------------}}
                <div class="col-2 _Margin_padding">
                    <div class="_Logout_user">
                        @php
                            $image=\App\Photo::where('user_id', auth()->id())->first()->path;
                        @endphp
                        <a href="{{url('/profile')}}">
                            <img src="{{url('Image/Profileuser/'.$image)}}" >
                        </a>
                        <span class="font16">{{ auth()->user()->firstname ." ". auth()->user()->lastname }}</span>
                        <div class="_Logout_user_ul">
                            <ul>
                                <li>
                                    <i class="fal fa-home font26"></i>
                                    <a href="{{url('/home')}}" class="font16">مشاهده وب سایت</a>
                                </li>
                                <li style="border: none">
                                    <form method="post" action="{{url('/logout')}}">
                                        @csrf
                                        <i class="fal fa--off font26" style="color: #9e0000"></i>
                                        <button type="submit" class=" font16">خروج از حساب کاربری</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-------------  Panel User  -------------}}

    <div class="container-fluid _Profile_panel">
        <div class="row _Margin_padding">

            {{-------------  Space -------------}}
            <div class="col-1 _Margin_padding"></div>

            {{-------------  Panel -------------}}
            <div class="col-10 _Margin_padding">
                <div class="row _Margin_padding">

                    {{-------------  Panel Information User -------------}}
                    <div class="col-2 _Margin_padding _Profile_panel_select_user">
                        <div class="_Profile_information_user ">
                            <i class="fal fa-user font60"></i>
                            <p class="font20">اطلاعات شخصی</p>
                        </div>
                    </div>

                    {{-------------  Other Panel -------------}}
                    <div class="col-10 _Margin_padding">
                        <div class="row _Margin_padding _Profile_panel_select">

                            {{-------------  Panel User -------------}}
                            <div class="col-2 _Margin_padding ">
                                    <div class="_Profile_panel_user _Profile_panel_select_paneluser">
                                        <i class="fal fa-user-crown font60"></i>
                                        <p class="font20">پنل مدیریتی</p>
                                    </div>
                            </div>

                            {{-------------  Like Dataweb User -------------}}
                            <div class="col-2 _Margin_padding">
                                    <div class="_Profile_panel_user _Profile_panel_select_like">
                                        <i class="fal fa-heart-circle font60"></i>
                                        <p class="font20">علاقه مندی ها</p>
                                    </div>
                            </div>

                            {{-------------  Follow User -------------}}
                            <div class="col-2 _Margin_padding ">
                                    <div class="_Profile_panel_user _Profile_panel_select_follow">
                                        <i class="fal fa-users font60"></i>
                                        <p class="font20">دنبال کننده ها</p>
                                    </div>
                            </div>

                            {{-------------  Request User -------------}}
                            <div class="col-2 _Margin_padding" >
                                    <div class="_Profile_panel_user _Profile_panel_select_request">
                                        <i class="fal fa-user-lock font60"></i>
                                        <p class="font20">درخواست</p>
                                    </div>
                            </div>

                            {{-------------  Financial Support -------------}}
                            <div class="col-2 _Margin_padding">
                                    <div class="_Profile_panel_user _Profile_panel_select_support">
                                        <i class="fal fa-hands-usd font60"></i>
                                        <p class="font20">حمایت مالی</p>
                                    </div>
                            </div>

                            {{-------------  Setting Profile -------------}}
                            <div class="col-2 _Margin_padding">
                                    <div class="_Profile_panel_user _Profile_panel_select_setting" id="_Profile_panel_user_boder">
                                        <i class="fal fa-cog font60"></i>
                                        <p class="font20">تنظیمات</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-------------  Space -------------}}
            <div class="col-1 _Margin_padding"></div>
        </div>
    </div>

    {{-------------  Panel -------------}}

    <div class="container-fluid _Profile_panel_Menu">
        <div class="row _Margin_padding">

            {{-----------  Space -----------}}
            <div class="col-1 _Margin_padding"></div>

            {{-----------  Menu Panel -----------}}
            <div class="col-2 _Margin_padding">

                {{-----------  Panel Information User -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_user">
                        <li class="_Profile_user_information"><i class="fal fa-address-card font28"></i><a href="#" class="font18">اطلاعات شما</a></li>
                        <li class="_Profile_user_gallery"><i class="fal fa-image-polaroid font28"></i><a href="#" class="font18">گالری عکس</a></li>
                        <li class="_Profile_user_insert"><i class="fal fa-user-cog font28"></i><a href="#" class="font18">تکمیل مشخصات</a></li>
                        <li class="_Profile_user_account"><i class="fal fa-user-unlock font28"></i><a href="#" class="font18">تغییر اکانت کابری</a></li>
                        <li class="_Profile_user_email"><i class="fal fa-check-double font28"></i><a href="#" class="font18">تغییر و تایید ایمیل</a></li>
                        <li class="_Profile_user_setting_email"><i class="fal fa-envelope-open-text font28"></i><a href="#" class="font18">تنظیمات ایمیل</a></li>
                    </ul>
                </div>

                {{-----------  Panel User -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_paneluser">
                        <li class="_Panel_user_post"><i class="fal fa-address-card font28"></i><a href="#" class="font18">پست ها</a></li>
                        <li class="_Panel_user_comment"><i class="fal fa-address-card font28"></i><a href="#" class="font18">کامنت ها</a></li>
                        <li class="_Panel_user_picher"><i class="fal fa-address-card font28"></i><a href="#" class="font18">عکس ها</a></li>
                        <li class="_Panel_user_video"><i class="fal fa-address-card font28"></i><a href="#" class="font18">ویدیو ها</a></li>
                        <li class="_Panel_user_music"><i class="fal fa-address-card font28"></i><a href="#" class="font18">صوت ها</a></li>
                        <li class="_Panel_user_village"><i class="fal fa-address-card font28"></i><a href="#" class="font18">روستاها</a></li>
                    </ul>
                </div>

                {{-----------  Like Dataweb User -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_like">
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">پست ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">کامنت ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">عکس ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">ویدیو ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">صوت ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">روستاها</a></li>
                    </ul>
                </div>

                {{-----------  Follow User -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_follow">
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">دنبال کننده ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">دنبال شده ها</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">جستوجوی کاربر</a></li>
                    </ul>
                </div>

                {{-----------  Request User -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_request">
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">ارسال در خواست</a></li>
                    </ul>
                </div>

                {{-----------  Financial Support -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_support">
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">پرداخت وجه</a></li>
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">آمار کمک های شما</a></li>
                    </ul>
                </div>

                {{-----------  Setting Profile -----------}}
                <div class="_Profile_panel_menu">
                    <ul class="_Profile_panel_menu_right_setting">
                        <li><i class="fal fa-address-card font28"></i><a href="#" class="font18">قالب</a></li>
                    </ul>
                </div>

            </div>

            {{-----------  Profile Information Panel -----------}}
            <div class="col-8 _Margin_padding">

                <div class="_Profile_panel_menu_left_user">

                    @include('profile.user-Information')

                </div>

            {{-----------  Panel User -----------}}
                <div class="_Profile_panel_menu_left_paneluser">
                    @include('profile.panel-user')
                </div>

            {{-----------  Like Dataweb User -----------}}
                <div class="_Profile_panel_menu_left_like">
                    <div class="_Profile_information_panel">
                    </div>
                </div>

            {{-----------  Follow User -----------}}
                <div class="_Profile_panel_menu_left_follow">
                    <div class="_Profile_information_panel">
                    </div>
                </div>

            {{-----------  Request User -----------}}
                <div class="_Profile_panel_menu_left_request">
                    <div class="_Profile_information_panel">
                    </div>
                </div>

            {{-----------  Financial Support -----------}}
                <div class="_Profile_panel_menu_left_support">
                    <div class="_Profile_information_panel">
                    </div>
                </div>

            {{-----------  Setting Profile -----------}}
                <div class="_Profile_panel_menu_left_setting">
                    <div class="_Profile_information_panel">
                    </div>
                </div>
            </div>

            {{-----------  Space -----------}}
            <div class="col-1 _Margin_padding"></div>
        </div>
    </div>

    {{-----------  1 -----------}}



</body>
<script src="{{url('js/jquery.js')}}"></script>
<script>
    (function () {
        $('._Logout_user').on('click',function () {
            $('._Logout_user_ul').show('slow');
        })
    })();
</script>
<script>
    (function (){

        //      Variable All
        var selectuser = $('._Profile_panel_select_user div');
        var selectpanel = $('._Profile_panel_select div div');
        var selectpanelpaneluser = $('._Profile_panel_select_paneluser');
        var selectpanellike = $('._Profile_panel_select_like');
        var selectpanelfollow = $('._Profile_panel_select_follow');
        var selectpanelrequest = $('._Profile_panel_select_request');
        var selectpanelsupport = $('._Profile_panel_select_support');
        var selectpanelsetting = $('._Profile_panel_select_setting');
        var Profilepanelmenu = $('._Profile_panel_menu ul li');

        //      li user information Variable
        var liboxuserinformation = $('._Profile_user_information');
        var liboxuserinformationgallery = $('._Profile_user_gallery');
        var liboxuserinformationinsert = $('._Profile_user_insert');
        var liboxuserinformationaccount = $('._Profile_user_account');
        var liboxuserinformationemail = $('._Profile_user_email');
        var liboxuserinformationsettingemail = $('._Profile_user_setting_email');
        var boxuserinformation = $('._Profile_panel_menu_left_user_title');
        var boxuserinformationgallery = $('._Profile_panel_menu_left_user_gallery');
        var boxuserinformationinsert = $('._Profile_panel_menu_left_user_insert');
        var boxuserinformationaccount = $('._Profile_panel_menu_left_user_account');
        var boxuserinformationemail = $('._Profile_panel_menu_left_user_email');
        var boxuserinformationsettingemail = $('._Profile_panel_menu_left_user_setting_email');

        //      li user panel Variable
        var liboxpaneluserpost = $('._Panel_user_post');
        var liboxpanelusercomment = $('._Panel_user_comment');
        var liboxpaneluserpicture= $('._Panel_user_picture');
        var liboxpaneluservideo = $('._Panel_user_video');
        var liboxpanelusermusic = $('._Panel_user_music');
        var liboxpaneluservillage = $('._Panel_user_village');

        var boxpaneluserpost = $('._Profile_panel_menu_left_Panel_user_post');
        var boxpanelusercomment= $('._Profile_panel_menu_left_Panel_user_comment');
        var boxpaneluserpicture = $('._Profile_panel_menu_left_Panel_user_picture');
        var boxpaneluservideo = $('._Profile_panel_menu_left_Panel_user_video');
        var boxpanelusermusic = $('._Profile_panel_menu_left_Panel_user_music');
        var boxpaneluservillage = $('._Profile_panel_menu_left_Panel_user_village');


        //      Index
        (function () {
            selectuser.show().addClass('_Profile_user _Profile_information_user_after');
            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();

            $(boxuserinformation).slideDown('slow');
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).hide();
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).hide();
        })();

        $('._Profile_panel_menu ul li:first-child').show().addClass('_Profile_panel_menu_after');

        selectuser.on('click',function () {
            $('._Profile_panel_select div').removeClass('_Profile_user _Profile_information_user_after');
            $(this).show().addClass('_Profile_user _Profile_information_user_after');
            $('._Profile_panel_menu_right_user').slideDown('slow');
            $('._Profile_panel_menu_left_user').slideDown('slow');

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanelpaneluser.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').slideDown('slow');
            $('._Profile_panel_menu_left_paneluser').slideDown('slow');

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanellike.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').slideDown('slow');
            $('._Profile_panel_menu_left_like').slideDown('slow');

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanelfollow.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').slideDown('slow');
            $('._Profile_panel_menu_left_follow').slideDown('slow');

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanelrequest.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').slideDown('slow');
            $('._Profile_panel_menu_left_request').slideDown('slow');

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanelsupport.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').slideDown('slow');
            $('._Profile_panel_menu_left_support').slideDown('slow');

            $('._Profile_panel_menu_right_setting').hide();
            $('._Profile_panel_menu_left_setting').hide();
        });

        selectpanelsetting.on('click',function () {
            $('._Profile_panel_menu_right_user').hide();
            $('._Profile_panel_menu_left_user').hide();

            $('._Profile_panel_menu_right_paneluser').hide();
            $('._Profile_panel_menu_left_paneluser').hide();

            $('._Profile_panel_menu_right_like').hide();
            $('._Profile_panel_menu_left_like').hide();

            $('._Profile_panel_menu_right_follow').hide();
            $('._Profile_panel_menu_left_follow').hide();

            $('._Profile_panel_menu_right_request').hide();
            $('._Profile_panel_menu_left_request').hide();

            $('._Profile_panel_menu_right_support').hide();
            $('._Profile_panel_menu_left_support').hide();

            $('._Profile_panel_menu_right_setting').slideDown('slow');
            $('._Profile_panel_menu_left_setting').slideDown('slow');
        });


        selectpanel.on('click',function () {
            $(selectuser).removeClass('_Profile_user _Profile_information_user_after');
            $('._Profile_panel_select div div').removeClass('_Profile_user _Profile_information_user_after');
            $(this).show().addClass('_Profile_user _Profile_information_user_after');
            $('._Profile_panel_menu_right_user').slideUp('slow');
            $('._Profile_panel_menu_left_user').slideUp('slow');
        })

        Profilepanelmenu.on('click',function () {
            $('._Profile_panel_menu ul li').removeClass('_Profile_panel_menu_after');
            $(this).show().addClass('_Profile_panel_menu_after');
        });

        // Li User

        // Li User Information
        liboxuserinformation.on('click',function (){
            $(boxuserinformation).slideDown('slow');
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).hide();
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).hide();
        });

        // Li User Gallery
        liboxuserinformationgallery.on('click',function (){
            $(boxuserinformation).hide();
            $(boxuserinformationgallery).slideDown('slow');
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).hide();
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).hide();
        });

        // Li User Insert
        liboxuserinformationinsert.on('click',function (){
            $(boxuserinformation).hide();
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).slideDown('slow');
            $(boxuserinformationaccount).hide();
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).hide();
        });

        // Li User Account
        liboxuserinformationaccount.on('click',function (){
            $(boxuserinformation).hide();
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).slideDown('slow');
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).hide();
        });

        // Li User Email
        liboxuserinformationemail.on('click',function (){
            $(boxuserinformation).hide();
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).hide()
            $(boxuserinformationemail).slideDown('slow');
            $(boxuserinformationsettingemail).hide()
        });

        // Li User Setting Email
        liboxuserinformationsettingemail.on('click',function (){
            $(boxuserinformation).hide();
            $(boxuserinformationgallery).hide();
            $(boxuserinformationinsert).hide();
            $(boxuserinformationaccount).hide()
            $(boxuserinformationemail).hide();
            $(boxuserinformationsettingemail).slideDown('slow');
        });


        //
        // Li User panel
        //

        // Li Panel User Post
        liboxpaneluserpost.on('click',function (){
            $(boxpaneluserpost).slideDown('slow');
            $(boxpanelusercomment).hide();
            $(boxpaneluserpicture).hide();
            $(boxpaneluservideo).hide();
            $(boxpanelusermusic).hide();
            $(boxpaneluservillage).hide();
        });

        // Li Panel User Comment
        liboxpanelusercomment.on('click',function (){
            $(boxpaneluserpost).hide();
            $(boxpanelusercomment).slideDown('slow');
            $(boxpaneluserpicture).hide();
            $(boxpaneluservideo).hide();
            $(boxpanelusermusic).hide();
            $(boxpaneluservillage).hide();
        });

        // Li Panel User Picture
        liboxpanelusercomment.on('click',function (){
            $(boxpaneluserpost).hide();
            $(boxpanelusercomment).hide();
            $(boxpaneluserpicture).slideDown('slow');
            $(boxpaneluservideo).hide();
            $(boxpanelusermusic).hide();
            $(boxpaneluservillage).hide();
        });

        // Li Panel User Video
        liboxpanelusercomment.on('click',function (){
            $(boxpaneluserpost).hide();
            $(boxpanelusercomment).hide();
            $(boxpaneluserpicture).hide();
            $(boxpaneluservideo).slideDown('slow');
            $(boxpanelusermusic).hide();
            $(boxpaneluservillage).hide();
        });
        // Li Panel User Music
        liboxpanelusercomment.on('click',function (){
            $(boxpaneluserpost).hide();
            $(boxpanelusercomment).hide();
            $(boxpaneluserpicture).hide();
            $(boxpaneluservideo).hide();
            $(boxpanelusermusic).slideDown('slow');
            $(liboxpaneluservillage).hide();
        });
        // Li Panel User Village
        liboxpanelusercomment.on('click',function (){
            $(boxpaneluserpost).hide();
            $(boxpanelusercomment).hide();
            $(boxpaneluserpicture).hide();
            $(boxpaneluservideo).hide();
            $(boxpanelusermusic).hide();
            $(liboxpaneluservillage).slideDown('slow');
        });
    })();
</script>
</html>
