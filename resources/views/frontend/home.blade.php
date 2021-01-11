<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{url('Bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Slideshow-Top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Menu-Top.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/post.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Post_news.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.min.css')}}">
</head>
<body>

<div class="home">
    <div class="slider" style="background: url('Pic/bacground-1.jpeg'); width: 100%; height: 100%; background-size: 100% 100%;">
        <div class="slide active">
             <div class="container">
                  <div class="caption">
                      <h1 class="font26">1. روستای گردشگری آتش بیگ</h1>
                      <p class="font22">اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                      <a href="#" class="font18">کلیک کنید</a>
                  </div>
             </div>
        </div>
        <div class="slide" style="background: url('Pic/bacground-3.jpg'); width: 100%; height: 100%; background-size: 100% 100%;">
            <div class="container">
                <div class="caption">
                    <h1>2. روستای گردشگری آتش بیگ</h1>
                    <p>اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                    <a href="#">کلیگ کنید</a>
                </div>
            </div>
        </div>
        <div class="slide" style="background: url('Pic/bacground-2.jpg'); width: 100%; height: 100%; background-size: 100% 100%;">
            <div class="container">
                <div class="caption">
                    <h1>3. روستای گردشگری آتش بیگ</h1>
                    <p>اولین وب سایت تخصیصی روستا های کشور در شهرستان هشترود </p>
                    <a href="#">کلیگ کنید</a>
                </div>
            </div>
        </div>
    </div>
    <div class="control">
        <div class="prev font55">></div>
        <div class="next font55"><</div>
    </div>
</div>
<div class="Fullcontainer">
    <div class="Container">
        <nav>
            <div class="logo">
                <a><img src=""></a>
            </div>
            <ul class="Menu-right">
                <li><a href="#" class="font18">صفحه اصلی</a></li>
                <li><a href="#" class="font18">مطالب<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="#" class="font18">آرشیو عکس<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="#" class="font18">آرشیو فیلم<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="#" class="font18">پیوند روستاها<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="#" class="font18">درباره ی ما</a></li>
                <li><a href="#" class="font18">تماس با ما</a></li>
            </ul>
            <ul class="Menu-left">
                <li><a href="Login_PHP/Login.php" class="font18">ورود / ثبت نام</a></li>
                <li><a href="#" class="font18">راهنمای سایت</a></li>
            </ul>
            <div class="Dropdownmenu">
                <ul class="Dropable1">-
                    <a href="#" class="font16">رسمی</a>
                    <a href="#" class="font16">عمس هایی از جلسات های مقامات</a>
                </ul>
            </div>
        </nav>
    </div>
</div>



    @include('frontend.home.post-news')
    @include('frontend.home.content')
    @include('frontend.home.post')

<script src="Js/js.js"></script>




</body>
<script src="{{url('js/jquery.js')}}"></script>
</html>
