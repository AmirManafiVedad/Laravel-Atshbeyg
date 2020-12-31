<div class="_Menu font18">
    <ul>
        <li style="border: none">
            @php
            $image=\App\Photo::where('user_id', auth()->id())->first()->path;
            @endphp
            <img src="{{url('Image/Profileuser/'.$image)}}" class="far fa-user font35 _Image_menu">
            <a href="#" class="_Image_text">{{ auth()->user()->firstname ." ". auth()->user()->lastname }}</a></li>
        <li ><a href="#">داشبورد</a></li>

        <li class="_Has-sub">
            <i class="far fa-home font22 _Menu_left"></i>
            <a href="#">مدیریت صفحه اصلی</a>
            <ul>

                <li>
                    <i class="far fa-plus-circle font20 _Menu_left _Menu_left_i"></i>
                    <a href="" class="font17">تبلیغات</a>
                </li>
                <li>
                    <i class="far fa-projector font20 _Menu_left _Menu_left_i"></i>
                    <a href="" class="font17">خبر فوری</a>
                </li>
                <li>
                    <i class="far fa-plus-circle font20 _Menu_left _Menu_left_i"></i>
                    <a href="" class="font17">پیشنهادات</a>
                </li>
                <li>
                    <i class="far fa-plus-circle font20 _Menu_left _Menu_left_i"></i>
                    <a href="" class="font17">اسلاید شو</a>
                </li>
                <li>
                    <i class="far fa-plus-circle font20 _Menu_left _Menu_left_i"></i>
                    <a href="" class="font17">فوتر</a>
                </li>

            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-puzzle-piece font22 _Menu_left"></i>
            <a href="#">مدیریت دسته ها</a>
            <ul>
                <li>
                    <i class="far fa-plus-circle font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/categories/createcategories')}}" class="font17">افزدون دسته</a></li>
                <li>
                    <i class="far fa-ballot font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/categories')}}" class="font17">نمایش دسته ها</a></li>
            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-clipboard font22 _Menu_left"></i>
            <a href="#">مدیریت مطالب</a>
            <ul>
                <li>
                    <i class="far fa-file-plus font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/posts/createpost')}}" class="font17">افزدون مطلب</a></li>
                <li>
                    <i class="far fa-edit font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/posts/')}}" class="font17">ویرایش مطلب</a></li>
                <li>
                    <i class="far fa-alarm-clock font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/posts/')}}" class="font17">در انتظار</a></li>
                <li>
                    <i class="far fa-paste font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/posts/')}}" class="font17">مطالب مدیر</a></li>
                <li>
                    <i class="far fa-paste font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/posts/')}}" class="font17">مطالب کاربر</a></li>
                <li>
                    <i class="far fa-paste font20 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/posts/postall')}}" class="font17">همه ی مطالب</a></li>
            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-comment font22 _Menu_left"></i>
            <a href="#">مدیریت نظرات</a>
            <ul>
                <li><a href="{{url('/admin/comments/requestcomment')}}" class="font17">لیست انتظار</a></li>
                <li><a href="{{url('/admin/comments/commentsall')}}" class="font17">کل نظرات </a></li>
                <li><a href="#" class="font17">نظرات آرشیو عکس</a></li>
                <li>
                    <i class="far fa-comment font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17">نظرات آرشیو فیلم</a></li>
                <li>
                    <i class="far fa-comment-music font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17">نظرات آرشیو صوت</a></li>
            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-users font22 _Menu_left"></i>
            <a href="#">مدیریت کاربران</a>
            <ul>
                <li>
                    <i class="far fa-plus-circle font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/users/create-user')}}" class="font17" >ایجاد کاربر</a>
                </li>
                <li>
                    <i class="far fa-users font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/users/usersall')}}" class="font17" >کل کاربران</a>
                </li>
                <li>
                    <i class="far fa-user-friends font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/users/usersnormal')}}" class="font17"  onclick="" >کاربران عادی</a>
                </li>
                <li>
                    <i class="far fa-users-medical font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17">در خواست کاربران عادی</a>
                </li>
                <li>
                    <i class="far fa-users-crown font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/users/usersVIP')}}" class="font17"  onclick="">کاربران ویژه</a>
                </li>
                <li>
                    <i class="far fa-users-medical font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17">در خواست کاربران ویژه</a>
                </li>
                <li>
                    <i class="far fa-user-tie font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('/admin/users/manager')}}" class="font17">مدیر ها</a>
                </li>
            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-photo-video font22 _Menu_left"></i>
            <a href="#">مدیریت رسانه ها</a>
            <ul>
                <li>
                    <i class="font22 far fa-plus-circle _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/media/createmedia')}}" class="font17">آپلود فایل</a>
                </li>
                <li>
                    <i class="far fa-images font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/media/mediaall')}}" class="font17">رسانه ها</a>
                </li>
                <li>
                    <i class="far fa-address-book font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/media/mediauserprofile')}}" class="font17">رسانه های پروفایل کابر</a>
                </li>
                <li>
                    <i class="far fa-file-alt font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/media/mediaposts')}}" class="font17">رسانه های پست</a>
                </li>
                <li>
                    <i class="far fa-clipboard-list-check font22 _Menu_left _Menu_left_i"></i>
                    <a href="{{url('admin/media/mediacategories')}}" class="font17">رسانه های دسته بندی</a>
                </li>
            </ul>
        </li>

        <li ><a href="#">تنظیمات</a></li>

        <li class="_Has-sub">
            <i class="far fa-users font22 _Menu_left"></i>
            <a href="#">تنظیمات پنل مدیریت</a>
            <ul>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17"> منوی قالب</a>
                </li>
            </ul>
        </li>

        <li class="_Has-sub">
            <i class="far fa-users font22 _Menu_left"></i>
            <a href="#">تنظیمات قالب سایت</a>
            <ul>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17"> منوی قالب</a>
                </li>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17"> اسلایدشو قالب</a>
                </li>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17"> پست قالب</a>
                </li>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17">لاگین قالب</a>
                </li>
                <li>
                    <i class="font22 _Menu_left _Menu_left_i"></i>
                    <a href="#" class="font17"> پنل مدیریت سایت</a>
                </li>
            </ul>
        </li>

        <li class="">
            <i class="far fa-users font22 _Menu_left"></i>
            <a href="{{url('home')}}">مشاهده سایت</a>
        </li>

    </ul>
</div>
