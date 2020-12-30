<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{$post->meta_description}}">
    <meta name="keyword" content="{{$post->meta_key_words }}">
    <meta name="" content="">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="{{url('Bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Css/Style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Css/posts/post.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Css/posts/postinformation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Css/posts/posttitle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Css/posts/userinformation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.min.css')}}">
</head>
<body>
<div class="_Img_Post">
    <img>
</div>
<div class="container-fluid">

    <div class="row">

        <div class="col-3">

            @include('frontend.post.post-index.postinformatin')

            @if(!is_null($post->user->admin_id))
                @include('frontend.post.post-index.userinfomation')
                @include('frontend.post.post-index.admininformation')
            @else
                @include('frontend.post.post-index.userinfomation')
            @endif

            @include('frontend.post.post-index.share')

        </div>

        <div class="col-9">

            @include('frontend.post.post-index.posttitle')

            @include('frontend.post.post-index.score')

            <div class="row _Margin_padding">

                <div class="col-12 _Margin_padding">
                    <div class="_Post_comment">
                        <nav class="font22">نظرات</nav>
                        <nav class="font22">ثبت نظر جدید</nav>

                        <div class="_Post_comment_box">
                            <div class="_Post_comment_information_top">
                                <i class="fa fa-user"></i>
                                <p class="font18">امیر منافی وداد</p>
                            </div>
                            <p class="font18">مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .  مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .</p>
                            <div class="row _Margin_padding _Post_comment_information">
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                        <i class="fal fa-calendar-alt font18"></i>
                                        <p class="font17">1399/07/15</p>
                                        <i class="far fa-clock  font18"></i>
                                        <p class="font17">18:45:20</p>
                                    </div>
                                </div>
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                    <a href="#" class="font16"> پاسخ دادن</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="_Post_comment_box">
                            <div class="_Post_comment_information_top">
                                <i class="fa fa-user"></i>
                                <p class="font18">امیر منافی وداد</p>
                            </div>
                            <p class="font18">مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .  مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .</p>
                            <div class="row _Margin_padding _Post_comment_information">
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                        <i class="fal fa-calendar-alt font18"></i>
                                        <p class="font17">1399/07/15</p>
                                        <i class="far fa-clock  font18"></i>
                                        <p class="font17">18:45:20</p>
                                    </div>
                                </div>
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                    <a href="#" class="font16"> پاسخ دادن</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="_Post_comment_box">
                            <div class="_Post_comment_information_top">
                                <i class="fa fa-user"></i>
                                <p class="font18">امیر منافی وداد</p>
                            </div>
                            <p class="font18">مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .  مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم . مطلب خیلی خوبی بود واقعا لذت بردم .</p>
                            <div class="row _Margin_padding _Post_comment_information">
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                        <i class="fal fa-calendar-alt font18"></i>
                                        <p class="font17">1399/07/15</p>
                                        <i class="far fa-clock  font18"></i>
                                        <p class="font17">18:45:20</p>
                                    </div>
                                </div>
                                <div class="col-6 _Margin_padding">
                                    <div class="_Post_comment_information_bottom">
                                    <a href="#" class="font16"> پاسخ دادن</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


</body>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

<script>
    var Informatingpoststar1 =document.getElementById('_Informating_post_star1');
    var Informatingpoststar2 =document.getElementById('_Informating_post_star2');
    var Informatingpoststar3 =document.getElementById('_Informating_post_star3');
    var Informatingpoststar4 =document.getElementById('_Informating_post_star4');
    var Informatingpoststar5 =document.getElementById('_Informating_post_star5');
    function Informatingpostpointstar0() {
        Informatingpoststar1.style.color = "white" ;
        Informatingpoststar2.style.color = "white" ;
        Informatingpoststar3.style.color = "white" ;
        Informatingpoststar4.style.color = "white" ;
        Informatingpoststar5.style.color = "white" ;
    }
    function Informatingpostpointstar1() {
        Informatingpoststar1.style.color = "yellow" ;
    }
    function Informatingpostpointstar2() {
        Informatingpoststar1.style.color = "yellow" ;
        Informatingpoststar2.style.color = "yellow" ;

    }
    function Informatingpostpointstar3() {
        Informatingpoststar1.style.color = "yellow" ;
        Informatingpoststar2.style.color = "yellow" ;
        Informatingpoststar3.style.color = "yellow" ;

    }
    function Informatingpostpointstar4() {
        Informatingpoststar1.style.color = "yellow" ;
        Informatingpoststar2.style.color = "yellow" ;
        Informatingpoststar3.style.color = "yellow" ;
        Informatingpoststar4.style.color = "yellow" ;

    }
    function Informatingpostpointstar5() {
        Informatingpoststar1.style.color = "yellow" ;
        Informatingpoststar2.style.color = "yellow" ;
        Informatingpoststar3.style.color = "yellow" ;
        Informatingpoststar4.style.color = "yellow" ;
        Informatingpoststar5.style.color = "yellow" ;
    }

</script>

</html>
