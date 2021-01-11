<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه لاگین روستای آتش بیگ</title>
    <link rel="stylesheet" type="text/css" href="{{url('Bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Panel_Admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/tableadmin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Singin_panel_admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Add_post_panel_admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Category_panel_admin.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('css/admin/user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/statistics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/post.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/categories.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/admin/comment.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('css/admin/tableadmin.css')}}">
    @yield('styles')
</head>
<body>
<div class="_Login-background">
    <img src="{{url('Image/28.jpg')}}">
</div>


@include('panel-admin.panel-admin-header-top')


<div class="container-fluid _Panel_text">
    <div class="row">
        <div class="col-3">

          @include('panel-admin.panel-admin-menu')


        </div>

        <div class="col-9">
            @yield('statistics')
            <div class="_Panel_col_left">
            @yield('content')
            </div>
        </div>
    </div>

</div>




</body>
@yield('scripts')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/menu-jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard-all/ckeditor.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'#textarea1'});</script>
<script>tinymce.init({selector:'#textarea2'});</script>
<script>
$(document).ready(function () {
        $('._Menu li._Active').addClass('_Open').children('ul').show();

        $("._Menu li._Has-sub> a").on('click', function () {
            $(this).removeAttr('href');
            var e = $(this).parent('li');
            if (e.hasClass('_Open')) {
                e.removeClass('_Open');
                e.find('li').removeClass('_Open');
                e.find('ul').slideUp(400);

            } else {
                e.addClass('_Open');
                e.children('ul').slideDown(400);
                e.siblings('li').children('ul').slideUp(400);
                e.siblings('li').removeClass('_Open');
                e.siblings('li').find('li').removeClass('_Open');
                e.siblings('li').find('ul').slideUp(200);
            }
        });
    });


</script>
<script>
    CKEDITOR.replace('editor1');
</script>
</html>
