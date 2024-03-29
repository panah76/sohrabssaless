<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
    * {
        margin: 0px;
        padding: 0px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    html,
    body {
        background-color: #ebecef;
        font-family: sans-serif, Arial;
        height: 100%;
        width: 100%;
    }
    input,
    button {
        font-family: sans-serif, Arial;
    }
    input:focus,
    button:focus,
    input:active,
    button:active {
        outline: none;
    }
    a {
        text-decoration: none;
    }
    a:focus,
    a:active {
        outline: none;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
        letter-spacing: 1px;
    }
    .container {
        height: 100%;
        width: 100%;
        position: relative;
        text-align: center;
    }
    .container:before {
        content: '';
        height: 100%;
        width: 0px;
        display: inline-block;
        vertical-align: middle;
    }
    .formBox {
        width: 460px;
        max-width: 100%;
        height: 552px;
        margin-left: -4px;
        margin-top: 50px;
        margin-bottom: 40px;
        position: relative;
        vertical-align: middle;
        display: inline-block;
    }
    .formBox .box {
        text-align: left;
        background-color: #fff;
        border-radius: 8px;
        padding: 60px 0px 40px 0;
        position: absolute;
        width: 100%;
        height: 100%;
        box-shadow: 0px 2px 11px -2px rgba(0, 0, 0, 0.5);
        transition: all 0.2s cubic-bezier(0.35, 0.33, 0.75, 0.9);
    }
    .formBox h2 {
        border-left: 6px solid #330101;
        color: #330101;
        padding: 0px 45px;
        font-size: 32px;
        line-height: 45px;
        height: 45px;
        text-transform: uppercase;
        margin-bottom: 50px;
        position: relative;
    }
    .formBox p {
        font-size: 18px;
        line-height: 27px;
        margin-bottom: 30px;
        color: #696969;
    }
    .formBox form {
        display: block;
        padding: 0px 50px;
        position: relative;
    }
    .formBox .f_row {
        position: relative;
        margin-bottom: 45px;
        height: 52px;
    }
    .formBox .f_row.shake {
        animation: shake 0.4s linear;
    }
    .formBox .f_row.last {
        margin-bottom: 53px;
    }
    .formBox .f_row label {
        color: #3f3f3f;
        font-size: 25px;
        font-weight: normal;
        position: absolute;
        left: 0;
        top: 10px;
        opacity: 1;
        transition: all 0.3s cubic-bezier(1, -0.33, 0, 1.15);
        transform: translate(0px, 0px) scale(1);
        transform-origin: left top;
    }
    .formBox .f_row input {
        background-color: transparent;
        border: none;
        color: #3f3f3f;
        font-size: 25px;
        width: 100%;
        height: 100%;
        position: relative;
    }
    .formBox .f_row u {
        background-color: #e1e1e1;
        width: 100%;
        height: 2px;
        position: absolute;
        left: 0;
        bottom: 0;
    }
    .formBox .f_row u:before {
        content: '';
        display: block;
        height: 100%;
        width: 0;
        background-color: #330101;
        transition: all 0.35s cubic-bezier(0.35, 0.33, 0.84, 0.85);
    }
    .formBox .f_row.focus label {
        opacity: 0.5;
        transform: translate(0px, -30px) scale(0.8);
    }
    .formBox .f_row.focus u:before {
        width: 100%;
    }
    .formBox .reg_bg {
        border-radius: 50%;
        background-color: #FFFFFF;
        position: absolute;
        width: 900px;
        height: 900px;
        right: -115px;
        top: -190px;
        transform-origin: 100% 40%;
        transform: scale(0);
    }
    .formBox .regTag {
        line-height: 140px;
        box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0.45);
        border-radius: 50%;
        background-color: #FFFFFF;
        color: #fff;
        font-size: 58px;
        text-align: center;
        width: 140px;
        height: 140px;
        position: absolute;
        right: -70px;
        top: 40px;
        z-index: 2;
    }
    .formBox .regTag svg {
        fill: #fff;
        width: 38px;
        height: 38px;
        position: relative;

        top: 50px;
    }
    .formBox .registerBox {
        border-radius: 8px;
        background-color: #fff;
        right: 0;
        overflow: hidden;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        backface-visibility: visible;
        z-index: 1;
    }
    .formBox .registerBox .f_row label,
    .formBox .registerBox .f_row input {
        color: #fff;
    }
    .formBox .registerBox .f_row u {
        background-color: #FFFFFF;
    }
    .formBox .registerBox .f_row u:before {
        background-color: #fff;
    }
    .formBox .registerBox .f_row.last {
        margin-bottom: 40px;
    }
    .formBox .registerBox h2 {
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translateX(-20px);
    }
    .formBox .registerBox .form > div {
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translateX(20px);
    }
    .formBox .registerBox .form > div:nth-child(1) {
        transition-delay: 0.15s;
    }
    .formBox .registerBox .form > div:nth-child(2) {
        transition-delay: 0.2s;
    }
    .formBox .registerBox .form > div:nth-child(3) {
        transition-delay: 0.25s;
    }
    .formBox .registerBox .btn-large {
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translateX(20px);
        transition-delay: 0.3s;
    }
    .formBox .forgetbox {
        background-color: #56ADC7;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translate(0px, 9px) scale(1.03);
    }
    .formBox .forgetbox .back {
        position: absolute;
        top: 13px;
        left: 26px;
        color: #fff;
        font-size: 32px;
        font-weight: bold;
        animation: back 0.8s linear;
        animation-iteration-count: infinite;
    }
    .formBox .forgetbox .back svg {
        fill: #fff;
        width: 20px;
        height: 20px;
    }
    .formBox .forgetbox .f_row label,
    .formBox .forgetbox .f_row input {
        color: #fff;
    }
    .formBox .forgetbox .f_row u {
        background-color: #7DC6DC;
    }
    .formBox .forgetbox .f_row u:before {
        background-color: #fff;
    }
    .formBox .forgetbox .f_row.last {
        margin-bottom: 40px;
    }
    .formBox .forgetbox .btn {
        border-color: #7DC6DC;
        color: #7DC6DC;
    }
    .formBox .forgetbox .btn u {
        background-color: #7DC6DC;
    }
    .formBox .forgetbox h2 {
        color: #fff;
        border-left-color: #fff;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translate(-20px, 0px);
    }
    .formBox .forgetbox .form > div {
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translate(0px, 20px);
        transition-delay: 0.15s;
    }
    .formBox .forgetbox p {
        color: #fff;
        visibility: hidden;
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translate(0px, 20px);
        transition-delay: 0.2s;
    }
    .formBox .forgetbox .btn {
        opacity: 0;
        transition: all 0.3s cubic-bezier(0.48, 0.55, 0.69, 0.9);
        transform: translate(0px, 20px);
        transition-delay: 0.25s;
    }
    .formBox.level-login .boxShaddow {
        opacity: 0.7;
        transform-origin: center top;
        transform: translate(0px, -9px) scale(0.97);
    }
    .formBox.level-reg h2 {
        border-left-color: #fff;
        color: #fff;
    }
    .formBox.level-reg .boxShaddow {
        opacity: 0.7;
        transform-origin: center top;
        transform: translate(0px, -18px) scale(0.94);
    }
    .formBox.level-reg .loginBox {
        opacity: 0.7;
        transform-origin: center top;
        transform: translate(0px, -9px) scale(0.97);
    }
    .formBox.level-reg .registerBox {
        opacity: 1;
        visibility: visible;
    }
    .formBox.level-reg .regTag {
        animation: regTag 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78), regTag2 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78);
        animation-fill-mode: forwards;
    }
    .formBox.level-reg .reg_bg {
        animation: regMask 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78);
        animation-fill-mode: forwards;
    }
    .formBox.level-reg .form > div,
    .formBox.level-reg .btn-large,
    .formBox.level-reg h2 {
        visibility: visible;
        opacity: 1;
        transform: translateX(0px);
    }
    .formBox.level-reg-revers .regTag {
        animation: regTagR 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78), regTag2R 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78);
        animation-fill-mode: forwards;
    }
    .formBox.level-reg-revers .reg_bg {
        animation: regMaskR 0.3s cubic-bezier(0.48, 0.55, 0.73, 0.78);
        animation-fill-mode: forwards;
    }
    .formBox.level-forget .boxShaddow {
        opacity: 0.7;
        transform-origin: center top;
        transform: translate(0px, -18px) scale(0.94);
    }
    .formBox.level-forget .loginBox {
        opacity: 0.7;
        transform-origin: center top;
        transform: translate(0px, -9px) scale(0.97);
    }
    .formBox.level-forget .forgetbox {
        transform: translate(0px, 0px) scale(1);
        opacity: 1;
        visibility: visible;
    }
    .formBox.level-forget .forgetbox p,
    .formBox.level-forget .forgetbox form > div,
    .formBox.level-forget .forgetbox .btn,
    .formBox.level-forget .forgetbox h2 {
        visibility: visible;
        opacity: 1;
        transform: translate(0px, 0px);
    }
    @keyframes back {
        0% {
            transform: translateX(0px);
        }
        70% {
            transform: translateX(-13px);
        }
        100% {
            transform: translateX(0px);
        }
    }
    @keyframes regMask {
        0% {
            transform: translate(0px, 0px) scale(0);
        }
        50% {
            transform: translate(100px, 100px) scale(0.5);
        }
        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }
    @keyframes regMaskR {
        0% {
            transform: translate(0px, 0px) scale(1);
        }
        50% {
            transform: translate(150px, -150px) scale(0.5);
        }
        100% {
            transform: translate(0px, 0px) scale(0);
        }
    }
    @keyframes regTag {
        0% {
            transform: translate(0px, 0px) rotate(0deg);
        }
        25% {
            transform: translate(4px, 25px) rotate(11.25deg);
        }
        50% {
            transform: translate(-88px, 40px) rotate(22.5deg);
        }
        100% {
            transform: translate(-96px, 8px) rotate(45deg);
        }
    }
    @keyframes regTag2 {
        0% {
            width: 140px;
            height: 140px;
            line-height: 140px;
            box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0.45);
        }
        100% {
            width: 70px;
            height: 70px;
            box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0);
            line-height: 68px;
        }
    }
    @keyframes regTagR {
        0% {
            transform: translate(-96px, 8px) rotate(45deg);
        }
        25% {
            transform: translate(-88px, 40px) rotate(22.5deg);
        }
        50% {
            transform: translate(4px, 25px) rotate(11.25deg);
        }
        100% {
            transform: translate(0px, 0px) rotate(0deg);
        }
    }
    @keyframes regTag2R {
        0% {
            width: 70px;
            height: 70px;
            box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0);
            line-height: 68px;
        }
        100% {
            width: 140px;
            height: 140px;
            line-height: 140px;
            box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0.45);
        }
    }
    @keyframes shake {
        from,
        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        10%,
        30%,
        50%,
        70%,
        90% {
            -webkit-transform: translate3d(-10px, 0, 0);
            transform: translate3d(-10px, 0, 0);
        }
        20%,
        40%,
        60%,
        80% {
            -webkit-transform: translate3d(10px, 0, 0);
            transform: translate3d(10px, 0, 0);
        }
    }
    .btn {
        transition: all 0.6s ease;
        background-color: #fff;
        border: 3px solid #dfdfdf;
        cursor: pointer;
        color: #dfdfdf;
        display: block;
        text-align: center;
        width: 243px;
        height: 73px;
        line-height: 73px;
        font-size: 23px;
        font-weight: bold;
        text-transform: uppercase;
        overflow: hidden;
        position: relative;
        margin-left: auto;
        margin-right: auto;
    }
    .btn span {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }
    .btn u {
        border-radius: 50%;
        background-color: #330101;
        position: absolute;
        left: -23px;
        top: -103px;
        width: 280px;
        height: 280px;
        transition: all 0.25s cubic-bezier(0.48, 0.55, 0.69, 1.11);
        transform-origin: center center;
        transform: scale(0);
    }
    .btn svg {
        fill: #fff;
        width: 35px;
        height: 35px;
        position: absolute;
        left: 50%;
        top: 50%;
        opacity: 0;
        transition: all 0.35s cubic-bezier(0.48, 0.55, 0.69, 1.11);
        transform: translate(-50%, -50%) rotate(-90deg) skew(18deg, 12deg);
    }
    .btn.active,
    .btn:hover {
        border-color: #330101;
        color: #330101;
    }
    .btn.active u {
        transform: scale(1);
    }
    .btn.active svg {
        opacity: 1;
        transform: translate(-50%, -50%) rotate(0deg) skew(0deg, 0deg);
    }
    .btn-large {
        transition: all 0.6s ease;
        background-color: #fff;
        border: 3px solid #fff;
        cursor: pointer;
        color: #330101;
        display: block;
        text-align: center;
        width: 100%;
        height: 70px;
        line-height: 67px;
        font-size: 23px;
        font-weight: bold;
        text-transform: uppercase;
        position: relative;
    }
    .btn-large.active,
    .btn-large:hover {
        background-color: #330101;
        border-color: #fff;
        color: #fff;
    }
    .f_link {
        text-align: center;
        padding-top: 50px;
    }
    .f_link a {
        color: #bdbdbd;
        font-size: 23px;
        transition: all 0.6s ease;
    }
    .f_link a:hover {
        color: #56ADC7;
    }
    @media screen and (max-height: 650px) {

    }

</style>

<div class="container">
    <div class="formBox level-login">
        <div class="box boxShaddow"></div>
        <div class="box loginBox">
            <div class="mt-5">
                @if($errors->any())
                   <div class="col-12">
                       @foreach($errors->all() as $errors)
                           <div class="alert alert-danger">{{$errors}}</div>
                       @endforeach
                   </div>
                    @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
            </div>
            <h2>Register</h2>
            <form class="form" action="{{ route('registration.post') }}" method="POST">
                @csrf
                <div class="f_row">
                    <label class="form-label"></label>
                    <input type="text" name="name" placeholder="Username"  class="input-field" required>
                    <u></u>
                </div>
                <div class="f_row">
                    <label class="form-label"></label>
                    <input type="email" name="email" placeholder="Email" class="input-field" required>
                    <u></u>
                </div>
                <div class="f_row last">
                    <label></label>
                    <input type="password" name="password" placeholder="Password" class="input-field" required>
                    <u></u>
                </div>

                <button class="btn"><span>REGISTER</span><u></u>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
                                <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                      c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                      c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                      C415.582,102.628,414.103,99.059,411.47,96.426z"/>
                                </svg>
                </button>
                <div class="f_link">
                    <a href="{{ route('login') }}" class="text-black">Do you have an account with us? </a>

                    <a href="" class="resetTag">Forgot your password?</a>
                </div>
            </form>
        </div>
        <div class="box forgetbox">
            <a href="#" class="back icon-back">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;"
                     xml:space="preserve">
	<polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876
		199.404,117.876 "/>
</svg>
            </a>
            <h2>Reset Password</h2>
            <form class="form">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                <div class="f_row last">
                    <label>Email Id</label>
                    <input type="text" class="input-field" required>
                    <u></u>
                </div>
                <button class="btn"><span>Reset</span><u></u>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 415.582 415.582" xml:space="preserve">
                                <path d="M411.47,96.426l-46.319-46.32c-5.482-5.482-14.371-5.482-19.853,0L152.348,243.058l-82.066-82.064
                                      c-5.48-5.482-14.37-5.482-19.851,0l-46.319,46.32c-5.482,5.481-5.482,14.37,0,19.852l138.311,138.31
                                      c2.741,2.742,6.334,4.112,9.926,4.112c3.593,0,7.186-1.37,9.926-4.112L411.47,116.277c2.633-2.632,4.111-6.203,4.111-9.925
                                      C415.582,102.628,414.103,99.059,411.47,96.426z"/>
                                </svg>
                </button>
            </form>
        </div>
        <div class="box registerBox">
            <span class="reg_bg"></span>
            <h2>Register</h2>
            <form class="form">
                <div class="f_row">
                    <label>Username</label>
                    <input type="text" class="input-field" required>
                    <u></u>
                </div>
                <div class="f_row">
                    <label>Password</label>
                    <input type="password" class="input-field" required>
                    <u></u>
                </div>
                <div class="f_row last">
                    <label>Repeat Password</label>
                    <input type="password" class="input-field" required>
                    <u></u>
                </div>
                <button class="btn-large">NEXT</button>
            </form>
        </div>
        <a href="{{ route('login') }}" class="regTag icon-add">
            <img src="{{ asset('assets/img/FaamGalleryLogo.png') }}" class="col-3">
        </a>
    </div>
</div>

<script src="jquery-3.4.1.min.js"></script>
<script>

    var inP     =   $('.input-field');

    inP.on('blur', function () {
        if (!this.value) {
            $(this).parent('.f_row').removeClass('focus');
        } else {
            $(this).parent('.f_row').addClass('focus');
        }
    }).on('focus', function () {
        $(this).parent('.f_row').addClass('focus');
        $('.btn').removeClass('active');
        $('.f_row').removeClass('shake');
    });


    $('.resetTag').click(function(e){
        e.preventDefault();
        $('.formBox').addClass('level-forget').removeClass('level-reg');
    });

    $('.back').click(function(e){
        e.preventDefault();
        $('.formBox').removeClass('level-forget').addClass('level-login');
    });



    $('.regTag').click(function(e){
        e.preventDefault();
        $('.formBox').removeClass('level-reg-revers');
        $('.formBox').toggleClass('level-login').toggleClass('level-reg');
        if(!$('.formBox').hasClass('level-reg')) {
            $('.formBox').addClass('level-reg-revers');
        }
    });
    $('.btn').each(function() {
        $(this).on('click', function(e){
            e.preventDefault();

            var finp =  $(this).parent('form').find('input');

            console.log(finp.html());

            if (!finp.val() == 0) {
                $(this).addClass('active');
            }

            setTimeout(function () {

                inP.val('');

                $('.f_row').removeClass('shake focus');
                $('.btn').removeClass('active');

            }, 2000);

            if(inP.val() == 0) {
                inP.parent('.f_row').addClass('shake');
            }

            //inP.val('');
            //$('.f_row').removeClass('focus');

        });
    });


</script>
</html>
