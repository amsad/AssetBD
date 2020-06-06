<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | assetsBD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login-assets/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login-assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="login-assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form class="login100-form validate-form flex-sb flex-w" method="post" action="{{route('login-validation')}}">
                {{ @csrf_field() }}
                <span class="login100-form-title p-b-51">
						Login
					</span>

                <div class="text-center w-full p-t-3 p-b-24">
                    <a class="txt1">
                        Sign in with your organizational id number.
                    </a>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username" value="Administration" readonly>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn m-t-17">
                    <input type="submit" class="login100-form-btn" value="Login">
                </div>
                <div class="text-center w-full p-t-3 p-b-24">
                    <a class="txt1 text-danger">
                        {{session('warning')}}
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/bootstrap/js/popper.js"></script>
<script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/daterangepicker/moment.min.js"></script>
<script src="login-assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="login-assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="login-assets/js/main.js"></script>

</body>
</html>
