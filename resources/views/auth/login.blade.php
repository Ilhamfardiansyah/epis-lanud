@extends('layouts.app')

@section('content')
    <style>
        body {
            background-color: rgba(246, 246, 246, .6);
            font-size: 14px;
            overflow-x: hidden;
            font-family: work-Sans, sans-serif;
            color: #313131;
        }

        .auth-bg {
            /* background: url("https://1.bp.blogspot.com/-wPV8ttcKt1w/XUQU29uSuoI/AAAAAAAAS5E/NkHtW6Squ8AtddlyanO3oMYG1fh3B4U3gCLcBGAs/s1600/auth-bg-1.05371463fdfe0de6d988.jpg"); */
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 50px 100px;
            background-position: center;
            background-attachment: fixed;
        }

        .authentication-box {
            width: 460px;
            z-index: 2;
            margin: 0 auto;
        }

        .theme-form .login-divider {
            position: relative;
            clear: both;
            height: 0;
            margin: 30px 0;
            border-top: 1px solid #eff0f1;
        }

        .theme-form .login-divider:before {
            position: absolute;
            top: -11px;
            left: 40%;
            margin-left: -10px;
            padding: 0 5px;
            color: #1b252a;
            background: #fff;
            content: "Or Login With";
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            border: 1px solid #efefef;
            border-radius: 5px;
        }

        .card {
            margin-bottom: 30px;
            border: 0;
            transition: all .3s ease;
            letter-spacing: .5px;
            border-radius: 8px;
            box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
        }

        .theme-form .social .form-group {
            justify-content: center;
        }

        .theme-form .social .form-group .btn {
            padding: 6px 15px;
        }

        .theme-form .btn-fb {
            background-color: #50598e;
            color: #fff;
        }

        .btn-showcase .btn {
            margin-bottom: 10px;
            margin-right: 18px;
        }


        .theme-form .btn-twitter {
            background-color: #6fa2d8;
            color: #fff;
        }

        .theme-form .btn-google {
            background-color: #c64e40;
            color: #fff;
        }




        .theme-form .checkbox label {
            padding-left: 10px;
        }

        .checkbox label {
            display: inline-block;
            position: relative;
            padding-left: 16px;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .checkbox label::before {
            content: "";
            display: inline-block;
            position: absolute;
            width: 19px;
            height: 19px;
            left: 0;
            margin-left: -16px;
            border: 1px solid #e8ebf2;
            border-radius: 3px;
            background-color: #fff;
            transition: border .15s ease-in-out, color .15s ease-in-out;
        }

        .checkbox input[type=checkbox]:focus,
        .checkbox input[type=checkbox]:focus+label::before {
            outline-offset: -2px;
        }

        .authentication-box h6 {
            color: #777;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .checkbox input[type=checkbox] {
            opacity: 0;
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0;
        }

        .fa-facebook-f:before,
        .fa-facebook:before {
            content: "\f09a";
        }

        .fa-facebook-f:before,
        .fa-facebook:before {
            content: "\f09a";
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

    <div class="page-wrapper">
        <div class="auth-bg">
            <div class="authentication-box">
                <div class="text-center"><img alt="assets/img/halim.png" src="">

                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <div class="text-center">
                            <h4>LOGIN</h4>
                            <h6>Enter your Username and Password </h6>

                        </div>
                        <!---->
                        <form class="theme-form ng-untouched ng-pristine ng-valid">
                            <div class="form-group"><label class="col-form-label pt-0">Email</label><input
                                    class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="email"
                                    required="" type="email">
                                <!---->
                                <!---->
                            </div>
                            <div class="form-group"><label class="col-form-label">Password</label><input
                                    class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="password"
                                    required="" type="password">
                                <!---->
                            </div>
                            <div class="form-group form-row mt-3 mb-0"><button class="btn btn-primary btn-block btn-lg"
                                    type="submit"><span>Login</span></button></div>
                            <div class="login-divider"></div>
                            <div class="social mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
