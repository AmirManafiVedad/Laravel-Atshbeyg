@extends('singin-login.index-auth')

@section('content')
    <section id="Login">
        <img class="Login-form-img" id="Login-image" src="../Image/Login.png">
        <p class="font21 p-text-Login Form-p" id="p-text-Login">ثبت نام</p>
        <p class="font15 P-color-Login Form-p" id="Login-p"></p>
        <form action="Sent.php" method="post">
            <div class="Fontawesome-Login input" id="Login-user">
                <i class="far fa-user Fontawesome-Login-i font18" id="Login-fa-user"></i>
                <input type="text" name="User_Name" class="font16" id="Login-userr" placeholder="نام کاربری خود را وارد کنید ...">
            </div>
            <div class="Fontawesome-Login input" id="Login-email">
                <i class="far fa-envelope Fontawesome-Login-i font18" id="Login-fa-at"></i>
                <input type="email" name="User_Email" class="font16" id="Login-emaill" placeholder="ایمیل خود را وارد کنید ...">
            </div>
            <div class="Fontawesome-Login input" id="Login-password">
                <i class="far fa-lock-alt Fontawesome-Login-i font18" id="Login-fa-at"></i>
                <input type="password" name="User_Password" class="font16" id="Login-passwordd" placeholder="رمز خود را وارد کنید ...">
            </div>
            <div class="Fontawesome-Login input" id="Login-againpassword">
                <i class="far fa-lock-alt Fontawesome-Login-i font18" id="Login-fa-unlock2"></i>
                <input type="password" name="" class="font16" id="Login-againpasswordd" placeholder="رمز خود را دوباره وارد کنید ...">
            </div>
            <button name="BtnSingin" class="Button-Login-right" id="Login-buttom-save" onclick="Logininput()">ثبت نام</button>
        </form>
    </section>
@endsection
