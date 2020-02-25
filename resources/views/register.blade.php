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
							<form class="login100-form validate-form" action="{{route('storeregister')}}" method="post">
								@csrf
								<span class="login100-form-title p-b-37">
									Sign Up
                                </span>

                                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter name">
									<input class="input100" type="text" name="name" placeholder="name">
									<span class="focus-input100"></span>
								</div>
                                
                                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
									<input class="input100" type="email" name="email" placeholder="email">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input m-b-20" data-validate="Enter phone">
									<input class="input100" type="text" name="phone" placeholder="phone">
									<span class="focus-input100"></span>
								</div>

								<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
									<input class="input100" type="password" name="password" placeholder="password">
									<span class="focus-input100"></span>
                                </div>
                                
                                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Confrim Password">
									<input class="input100" type="password" name="cpassword" placeholder="confirm password">
									<span class="focus-input100"></span>
								</div>

								<div class="container-login100-form-btn">
									<button class="login100-form-btn">
										Register
									</button>
								</div>

								<div class="text-center" style="margin-top:10px;">
                                    <p>Already member?</p>
									<a href="{{route('authlogin')}}" class="txt2 hov1">
										Sign In
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