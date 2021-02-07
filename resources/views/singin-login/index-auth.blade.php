<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه لاگین روستای آتش بیگ</title>
    <link rel="stylesheet" type="text/css" href="{{url('Css/font-yekan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('FontAwesome/css/all.css')}}../../">
    <link rel="stylesheet" type="text/css" href="{{url('Css/Login.css')}}">
</head>
<body>

<img class="Login-background" src="{{url('Image/13.png')}}">
    <div class="Login">
        <div class="Login-img">
            <img class="Login-img-img" src="{{url('Image/Login-image.jpg')}}">
            <div class="Img-login-text">
                <p class="Img-login-text-p1 font28">وب سایت روستای آتش بیگ</p>
                <p class="Img-login-text-p2 font20">روستای گردشگری آتش بیگ شهرستان هشترود استان آذربایحان شرقی اولین وب سایت تخصصی طبیعتی و گردشگری کشور </p>
                <p class="Img-login-text-p2 font20" id="Img-login-text-p2"> برای دسترسی به بخش های مهم سایت ثبت نام کنید ...</p>
                <a href="{{url('/home')}}" class="Img-login-text-a font16">بازگشت</a>
            </div>
                <div class="Login-name">
                    <ul>
                        <li class="Login-li"><a href="{{url('register')}}" class="font16" onclick="Login()" id="Loginli">ثبت نام</a></li>
                        <li class="Login-li"><a href="{{url('login')}}" class="font16" onclick="Singin()" id="Singinli">ورود</a></li>
                    </ul>
                </div>
        </div>

        <div class="Login-form">

            <!---------------------------    Sing in     --------------------------->


        @yield('content')


        </div>

    </div>
</body>

<script>
    //////////////////////////// Login Form ////////////////////////////
    var Loginfauser = document.getElementById('Login-fa-user');
    var Loginnuser = document.getElementById('Login-user');
    var Loginnuserr = document.getElementById('Login-userr').value;
    var Loginfaat = document.getElementById('Login-fa-at');
    var Loginnemail = document.getElementById('Login-email');
    var Loginnemaill = document.getElementById('Login-emaill').value;
    var Loginfaunlock = document.getElementById('Login-fa-unlock');
    var Loginnpassword = document.getElementById('Login-password');
    var Loginnpasswordd = document.getElementById('Login-passwordd').value;
    var Loginfaunlock2 = document.getElementById('Login-fa-unlock2');
    var Loginnagainpassword = document.getElementById('Login-againpassword');
    var Loginnagainpasswordd = document.getElementById('Login-againpasswordd').value;
    //////////////////////////// Singin Form ////////////////////////////
    var Singinfauser = document.getElementById('Singin-fa-user');
    var Singinnuser = document.getElementById('Singin-user');
    var Singinnuserr = document.getElementById('Singin-userr').value;
    var Singinfaunlock= document.getElementById('Singin-fa-unlock');
    var Singinnpassword = document.getElementById('Singin-passwordd');
    var Singinnpasswordd = document.getElementById('Singin-passwordd').value;
    //////////////////////////// img li ////////////////////////////
    var Loginnli = document.getElementById('Loginli');
    var Singinnli = document.getElementById('Singinli');
    //////////////////////////// Form display ////////////////////////////
    var Loginn =document.getElementById('Login');
    var Singinn =document.getElementById('Singin');
    //////////////////////////// Login ////////////////////////////
    function Login() {
    }
    function Logininput() {
        //////////////////////////////////////////////////////////////////////
        if (Loginnuserr === "" && Loginnemaill === "" && Loginnpasswordd === "" && Loginnagainpasswordd === ""){
            Loginnuser.style.borderBottom = "1px solid red" ;
            Loginnemail.style.borderBottom = "1px solid red" ;
            Loginnpassword.style.borderBottom = "1px solid red" ;
            Loginnagainpassword.style.borderBottom = "1px solid red" ;
            document.querySelector("#Login-p").innerHTML = "فیلد ها خالی است لطفا تمام فیلد ها رو پر کرده و دوباره سعی کنید ...";
            Loginfauser.style.color = "rgba(158, 0, 0, 0.75)";
            Loginfaat.style.color = "rgba(158, 0, 0, 0.75)";
            Loginfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
            Loginfaunlock2.style.color = "rgba(158, 0, 0, 0.75)";

        }
        //////////////////////////////////////////////////////////////////////
        else if (Loginnuserr === ""){
            Loginfauser.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnuser.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            document.querySelector("#Login-p").innerHTML = "نام کاربری خالی است لطفا دوباره سعی کنید";
        }else if (Loginnuserr.length < 5) {
            Loginfauser.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnuser.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Login-p").innerHTML = "نام کاربری کمتر از 5 کارکتر است لطفا دوباره سعی کنید";
        }//////////////////////////////////////////////////////////////////////
        else if (Loginnemaill === ""){
            Loginfaat.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnemail.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            document.querySelector("#Login-p").innerHTML = "ایمیل خالی است لطفا دوباره سعی کنید";
        }//////////////////////////////////////////////////////////////////////
        else if (Loginnpasswordd === ""){
            Loginfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            document.querySelector("#Login-p").innerHTML = "رمز عبور خالی است لطفا دوباره سعی کنید";
        }else if (Loginnpasswordd.length < 8) {
            Loginfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Login-p").innerHTML = "رمز عبور کمتر از 8 کارکتر است لطفا دوباره سعی کنید";
        }//////////////////////////////////////////////////////////////////////
        else if (Loginnagainpasswordd === ""){
            Loginfaunlock2.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnagainpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            document.querySelector("#Login-p").innerHTML = "رمز عبور دوم خالی است لطفا دوباره سعی کنید";
        }else if (Loginnagainpasswordd .length < 8) {
            Loginfaunlock2.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnagainpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Login-p").innerHTML = "رمز عبور دوم کمتر از 8 کارکتر است لطفا دوباره سعی کنید";
        }else if (Loginnagainpasswordd !== Loginnpasswordd.value){
            Loginfaunlock2.style.color = "rgba(158, 0, 0, 0.75)";
            Loginfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
            Loginnagainpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            Loginnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)" ;
            document.querySelector("#Login-p").innerHTML = "رمز عبور اول و دوم باید باهم دیگه برابر باشند لطفا دوباره سعی کنید ...";
        }
    }
    //////////////////////////// Singin ////////////////////////////
    function Singin() {
    }
    function Singininput() {
        //////////////////////////////////////////////////////////////////////
        if (Singinnuserr === "" && Singinnpasswordd === "") {
            Singinnuser.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            Singinnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Singin-p").innerHTML = "فیلد ها خالی است لطفا تمام فیلد ها رو پر کرده و دوباره سعی کنید ...";
            Singinfauser.style.color = "rgba(158, 0, 0, 0.75)";
            Singinfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
        }//////////////////////////////////////////////////////////////////////
        else if (Singinnuserr === "") {
            Singinnuser.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Singin-p").innerHTML = "نام کاربری خالی است لطفا دوباره سعی کنید";
            Singinfauser.style.color = "rgba(158, 0, 0, 0.75)";
        } else if (Singinnuserr.length < 5) {
            Singinnuser.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Singin-p").innerHTML = "نام کاربری کمتر از 5 کارکتر است لطفا دوباره سعی کنید";
            Singinfauser.style.color = "rgba(158, 0, 0, 0.75)";
        }//////////////////////////////////////////////////////////////////////
        else if (Singinnpasswordd  === "") {
            Singinnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Singin-p").innerHTML = "رمز عبور خالی است لطفا دوباره سعی کنید";
            Singinfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
        } else if (Singinnpasswordd.length < 8) {
            Singinnpassword.style.borderBottom = "1px solid rgba(158, 0, 0, 0.75)";
            document.querySelector("#Singin-p").innerHTML = "رمز عبور کمتر از 8 کارکتر است لطفا دوباره سعی کنید";
            Singinfaunlock.style.color = "rgba(158, 0, 0, 0.75)";
        }
    }
</script>

</html>



