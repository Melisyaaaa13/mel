{{-- {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Aplikasi web ini</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{'assetss/images/icons/favicon.ico'}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/bootstrap/css/bootstrap.min.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/fonts/font-awesome-4.7.0/css/font-awesome.min.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/animate/animate.css'}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/css-hamburgers/hamburgers.min.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/animsition/css/animsition.min.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/select2/select2.min.css'}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{'assetss/vendor/daterangepicker/daterangepicker.css'}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{'assetss/css/util.css'}}">
	<link rel="stylesheet" type="text/css" href="{{'assetss/css/main.css'}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login')}}">
                    @csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/jquery/jquery-3.2.1.min.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/animsition/js/animsition.min.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/bootstrap/js/popper.js'}}"></script>
	<script src="{{'assetss/vendor/bootstrap/js/bootstrap.min.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/select2/select2.min.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/daterangepicker/moment.min.js'}}"></script>
	<script src="{{'assetss/vendor/daterangepicker/daterangepicker.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/vendor/countdowntime/countdowntime.js'}}"></script>
<!--===============================================================================================-->
	<script src="{{'assetss/js/main.js'}}"></script>

</body>
</html>