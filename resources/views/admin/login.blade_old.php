t<!DOCTYPE html>
<html>
<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 10:57:46 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Admin" />
	<meta name="author" content="Admin" />
	 <title> LetChats </title>
 <link href="{{asset('css/assets/img/favicon.png')}}" rel="icon" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
  <!-- <link rel="stylesheet" href="{{asset('css/assets/plugins/material/material.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/assets/css/material_style.css')}}"> -->
  <!-- animation -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">


	<link href="{{asset('css/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/plugins/iconic/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/assets/css/pages/extra_pages.css')}}" rel="stylesheet">
</head>
<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
		   @if(Session::has('flash_message_error'))
            <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_error') !!}</strong>
                </div>
            @endif   
            @if(Session::has('flash_message_success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_message_success') !!}</strong>
                </div>
            @endif
				
			    <form method="POST" class="login100-form validate-form" action="{{ url('/admin') }}">
                    {{ csrf_field() }}		
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
					Admin Login
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="email" placeholder="Enter Email Address...">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label> 
					</div> -->
					<div class="container-login100-form-btn">
			        <button class="login100-form-btn" type="submit">
							Login
					</button>
					</div>
					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{asset('css/assets/plugins/jquery/jquery.min.js')}}"></script>
    
	<!-- bootstrap -->
	<script src="{{asset('css/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('css/assets/js/pages/extra_pages/login.js')}}"></script>

	
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 10:57:46 GMT -->
</html>