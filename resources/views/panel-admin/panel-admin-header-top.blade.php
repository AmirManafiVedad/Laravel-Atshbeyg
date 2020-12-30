<div class="container-fluid _Header_top">
    <div class="row">
        <div class="col-2 _Background_header">
            <p class="font22 _Header_top_p">پنل مدیریت روستای آتش بیگ</p>

        </div>
        <div class="col-4 _Background_header">
            <div class="_Search_menu_top">
                <input type="search" name="" id="" class="font16" placeholder="جستوجو کنید ...">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-2 _Background_header">
            <div class="_Header_top_i">
                <i class="far fa-palette font30"></i>
                <i class="far fa-cog font30"></i>
                <i class="fas fa-th font30"></i>
                <i class="far fa-bell font30"></i>
            </div>
        </div>
        <div class="col-2 _Background_header">
                <div class="_Header_top_power">
                        <form method="post" action="{{url('/logout')}}">
                        @csrf
                        <button type="submit" class="_Header_top_power_buttom font22">خروج از حساب کاربری</button>
                        <i class="far fa-power-off font22 _Header_top_power_i"></i>
                    </form>
                </div>
        </div>
        <div class="col-2 _Background_header"></div>
    </div>
</div>
