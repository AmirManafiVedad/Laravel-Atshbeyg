@extends('')
@section()
    <section id="Singin">
        <img class="Login-form-img" id="Singin-image" src="../Image/Singin.png">
        <p class="font21 p-text-Login Form-p" id="p-text-Singin">ورود</p>
        <p class="font15 P-color-Login Form-p" id="Singin-p"></p>
        <form action="" method="get">
            <div class="Fontawesome-Login input" id="Singin-user">
                <i class="far fa-user Fontawesome-Login-i font18" id="Singin-fa-user"></i>
                <input type="text" name="User_Name_Singin" class="font16" id="Singin-userr" placeholder="نام کاربری خود را وارد کنید ...">
            </div>
            <div class="Fontawesome-Login input" id="Singin-password">
                <i class="far fa-lock-alt Fontawesome-Login-i font18" id="Singin-fa-unlock"></i>
                <input type="password" name="Password_Singin" class="font16" id="Singin-passwordd"  placeholder="رمز خود را وارد کنید ...">
            </div>
            <a href="#" class="font15 forgot-password" id="Singin-forgot-password"> رمز خود را فراموش کرده اید ؟</a>
            <button class="Button-Login-right" id="Singin-buttom-save" onclick="Singininput()">ورود</button>
        </form>
    </section>
@endsection
