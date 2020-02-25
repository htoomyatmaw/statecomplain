@extends('template')

@push('css')
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="{{asset('authlogin/images/icons/favicon.ico')}}"/>
	<!--===============================================================================================-->
		<!-- <link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/bootstrap/css/bootstrap.min.css')}}"> -->
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/css/util.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('authlogin/css/main.css')}}">
	<!--===============================================================================================-->
@endpush

@section('content')

	 <!--Header-Area-->
	 <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
					<div class="container-login100">
						<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
							<form class="login100-form validate-form" action="{{route('auth.login')}}" method="post">
								@csrf
								<span class="login100-form-title p-b-37">
									Sign In
								</span>

								<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email or phone">
									<input class="input100" type="text" name="email" placeholder="email or phone">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
									<input class="input100" type="password" name="password" placeholder="password">
									<span class="focus-input100"></span>
								</div>

								<div style="float:right;margin-bottom:10px;">
									<a href="#">Forgot password?</a>
								</div>

								<div class="container-login100-form-btn mt">
									<button class="login100-form-btn mt-5">
										Login
									</button>
								</div>

								<div class="text-center p-t-57 p-b-20">
									<span class="txt1">
										Or login with
									</span>
								</div>

								<div class="flex-c p-b-112">
									<a href="#" class="login100-social-item">
										<i class="fa fa-facebook-f"></i>
									</a>

									<a href="#" class="login100-social-item">
										<img src="{{asset('authlogin/images/icons/icon-google.png')}}" alt="GOOGLE">
									</a>
								</div>

								<div class="text-center">
									<p>Have an account?</p>
									<a href="{{route('authregister')}}" class="txt2 hov1">
										Sign Up
									</a>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/-->
	
@endsection

@push('scripts')

	<!--===============================================================================================-->
	<script src="{{asset('authlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/bootstrap/js/popper.js')}}"></script>
		<!-- <script src="{{asset('authlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script> -->
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/daterangepicker/moment.min.js')}}"></script>
		<script src="{{asset('authlogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
		<script src="{{asset('authlogin/js/main.js')}}"></script>

@endpush