<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="keywords" content="" />

    <title>LetChats :: Admin</title>
    <link href="{{asset('css/assets_agent/img/favicon.png')}}" rel="icon" />
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link href="{{asset('css/assets_agent/style.css')}}" rel="stylesheet" />
	<link href="{{asset('css/assets_agent/bootstrap.min.css')}}" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script>
		$(document).ready(function(){
		  $("#show_hide").click(function(){
			$("#login_show").toggle();
		  });
		  $("#show_hide").click(function(){
			$("#login_hide").toggle();
		  });
		});
	</script>
	
	<style>		
		body{
		background:url("{{asset('css/assets_agent/img/Triangle1.jpg')}}");
		}	
	</style>
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card" id="login_hide">
			    <div class="row">
			    <div class="col-md-12">
				    <div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="{{asset('css/assets_agent/img/logow.png')}}" class="brand_logo" alt="Logo">
					</div>
				</div>
				</div>
				</div>
			    <div class="row">				
				<div class="col-md-6 form_container" style="border-right: 2px dashed #fff;">
				<h4 class="mb-4 text-center" style="color:#fff;font-size: 32px;">Admin</h4>
				<!-- <h4 class="mb-4" style="color:#fff">Engage More Customer</h4> -->
				<p class="" style="color:#fff">
				Engage more customer with single agent at a time & increase your productivity,Engage more customer with single agent at a time & increase your productivity,
				</p>
				</div>
				<div class="col-md-6">
				
				<div class="d-flex justify-content-center form_container">
					
				    <form style="width:96%" method="post" autocomplete="off" action="{{ url('/admin') }}" role="login"> 
				    {{ csrf_field() }} 	
				    <p>
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
                     </p>	
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							
							<!-- <input type="email" name="email" placeholder="Email" required="" class="form-control input_user" /> -->

							<input class="form-control input_user" type="email" required="" name="email" placeholder="Enter Email Address..." autocomplete="off">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<!-- 
                            <input type="password" name="password" required="" class="form-control input_pass" value="" placeholder="Password"> -->

                            <input class="form-control input_pass" required="" autocomplete="off" type="password" name="password" placeholder="Enter Password">
						</div>
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline" style="color:#fff">Remember me</label>
							</div>
						</div> -->
				   <div class="d-flex justify-content-center mt-3">
				 	<button type="submit" name="go" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">					
					<div class="d-flex justify-content-center links">
						<div class="mb-3 float-right col-md-12">
				 	<a href="http://www.letchats.com" name="button" style="color:#fff; float:right;" class="">Home</a>
				   </div>
						<!-- <a href="javascripy:void(0);" id="show_hide" style="color:#fff; font-size:14px;">Forgot your password?</a> -->
					</div>
				</div>
				
				
				
				</div>
				
			    </div>
				 <div class="row">
				    <div class="col-lg-12 text-center mt-4">
					    <a href="https://xenottabyte.in/" class="" style="color:#fff">
				<b> Xenottabyte Services Pvt. Ltd.</b> 
				</a>
					</div>
				 </div>

			</div>
						
			<div class="user_card login_hide1" id="login_show">				
				<div class="row">
			    <div class="col-md-12">
				    <div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="assets/img/logow.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				</div>
				</div>
			    <div class="row">				
				<div class="col-md-6 form_container" style="border-right: 2px dashed #fff;">
				<h4 class="mb-4" style="color:#fff">Engage More Customer</h4>
				<p class="" style="color:#fff">
				Engage more customer with single agent at a time & increase your productivity,Engage more customer with single agent at a time & increase your productivity,
				</p>
				</div>
				<div class="col-md-6">				
				<div class="d-flex justify-content-center form_container">
					<form style="width:80%">						
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-envelope"></i></span>
							</div>
							<input type="text" name="" class="form-control input_user" value="" placeholder="EmailId">
						</div>
						<div class="d-flex justify-content-center mt-3">
						     <button type="button" name="button" class="btn login_btn">Submit</button>
					    </div>
				   	<div class="mt-3 mb-3 float-right col-md-12">
				 	<a href="signup.html" name="button" style="color:#fff; float:right;" class="">Back</a>
				   </div>
				    <div class="mb-3 float-right col-md-12">
				 	<a href="index.html" name="button" style="color:#fff; float:right;" class="">Home</a>
				   </div>
					</form>
				</div>					
				</div>
			    </div>
				<div class="row">
				    <div class="col-lg-12 text-center mt-4">
					    <a href="https://xenottabyte.in/" class="" style="color:#fff">
				<b>Xenottabyte Services pvt. ltd</b> 
				</a>
					</div>
				 </div>
			</div>						
		</div>
		
		
	</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
	
</body>
   
</html>