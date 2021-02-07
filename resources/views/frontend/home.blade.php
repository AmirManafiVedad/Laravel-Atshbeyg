<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{url('Bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Slideshow-Top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Menu-Top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/post.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Post_news.css')}}">
</head>
<body>

<div class="home">
    <div class="slider" style="background: url({{url('Image/background-1.jpeg')}}); width: 100%; height: 100%; background-size: 100% 100%;">
        <div class="slide active">
             <div class="container">
                  <div class="caption">
                      <h1 class="font44">روستای گردشگری آتش بیگ</h1>
                      <p class="font24">اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                      <button href="#" class="font18">کلیگ کنید</button>
                  </div>
             </div>
        </div>
        <div class="slide" style="background: url({{url('Image/background-3.jpg')}}); width: 100%; height: 100%; background-size: 100% 100%;">
            <div class="container">
                <div class="caption">
                    <h1 class="font44">روستای گردشگری آتش بیگ</h1>
                    <p class="font24">اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                    <button href="#" class="font18">کلیگ کنید</button>
                </div>
            </div>
        </div>
        <div class="slide" style="background: url({{url('Image/13.png')}}); width: 100%; height: 100%; background-size: 100% 100%;">
            <div class="container">
                <div class="caption">
                    <h1 class="font44">روستای گردشگری آتش بیگ</h1>
                    <p class="font24">اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                    <button href="#" class="font18">کلیگ کنید</button>
                </div>
            </div>
        </div>
    </div>
    <div class="control">
        <div class="prev font55">></div>
        <div class="next font55"><</div>
    </div>
</div>

{{--     Menu Header    --}}

<div class="_Menu_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 _Margin_padding">
                <div class=" ">
                    <ul>
                        <li><a href="#" class="font18">خانه</a></li>
                        <li><a href="#" class="font18">مطالب</a><i class="fas fa-caret-down"></i></li>
                        <li><a href="#" class="font18">آرشیو</a><i class="fas fa-caret-down"></i></li>
                        <li><a href="#" class="font18">پیوند روستا</a><i class="fas fa-caret-down"></i></li>
                        <li><a href="#" class="font18">درباره ی ما</a></li>
                        <li><a href="#" class="font18">تماس با ما</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3 _Margin_padding">
                <div class="_Menu_header_search">
                    <form class="">
                        <i class="fas fa-search"></i>
                        <input type="text" name="" id="" class="font18" value="" placeholder="جستوجو کنید ...">
                    </form>
                </div>
            </div>
            <div class="col-3 _Margin_padding">
                <div class="_Menu_header_left">
                    <div class="_Menu_header_left_box" id="_Menu_header_left_help">
                        <a href="#" class="font18">راهنما</a>
                    </div>
                    @guest()
                    <div class="_Menu_header_left_box">
                        <a href="{{route('register')}}" class="font18">ورود / ثبت نام</a>
                    </div>
                    @endguest
                    @auth
                        <div class="_Menu_header_left_user">
                            @php
                                $image=\App\Photo::where('user_id', auth()->id())->first()->path;
                            @endphp
                            <a href="{{url('/profile')}}">
                                <img src="{{url('Image/Profileuser/'.$image)}}" >
                            </a>
                            <span class="font15">{{ auth()->user()->firstname ." ". auth()->user()->lastname }}</span>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>

</div>


    @include('frontend.home.post-news')
    @include('frontend.home.content')
    @include('frontend.home.post')

<script src="Js/js.js"></script>




</body>
<script src="{{url('js/jquery.js')}}"></script>
</html>
