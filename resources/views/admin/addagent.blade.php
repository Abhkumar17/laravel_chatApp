<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
 <title> LetChats </title>
 <link href="{{asset('css/assets/img/favicon.png')}}" rel="icon" />
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="{{asset('css/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- <link href="{{asset('css/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="{{asset('css/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> -->
	<link href="{{asset('css/assets/plugins/summernote/summernote.css')}}" rel="stylesheet">
	<!-- morris chart -->
	<!-- <link href="{{asset('css/assets/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" /> -->
	<!-- Material Design Lite CSS -->
	<link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script>
	<!-- <link rel="stylesheet" href="{{asset('css/assets/plugins/material/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/assets/css/material_style.css')}}"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<!-- animation -->
	<link href="{{asset('css/assets/css/pages/animate_page.css')}}" rel="stylesheet">
	<!-- Template Styles -->
	<link href="{{asset('css/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('css/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	
	
	<!--bootstrap -->
	<!-- Material Design Lite CSS -->
	<!-- animation -->
	<!-- Template Styles -->

</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		@include('admin.commanadmin.header')
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			@include('admin.commanadmin.sidebar')
			<!-- end sidebar menu -->
            <!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">

						<div class="row">
							
							<div class="col-xl-12">
								<div class="card card-box">
							       <div class="row">					
							        <div class="col-xl-6">
                                        <div class="form-group">
                                        	<div class="row">
                                        		 <div class="col-lg-4">
												<label class="control-label">Occupation</label>
											</div>
												<div class="col-md-8">
													<input name="occupation" type="text" class="form-control">
													
												</div>
											</div>										</div>
                                       
							        </div>
							        <div class="col-xl-6">
            
                                    <h3>hhhhhhhhhhhhhhh</h3>
							        </div>
							        </div>	
						
                                </div>
						<!-- /.info-box -->
						</div>
<!-- /.col -->

				</div>
			
			<br><br><br><br><br><br><br>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		@include('admin.commanadmin.footer')
		
		<!-- end footer -->
	</div>
	
	<script src="{{asset('css/assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('css/assets/plugins/popper/popper.min.js')}}"></script>
	<script src="{{asset('css/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('css/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('css/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('css/assets/js/app.js')}}"></script>
	<script src="{{asset('css/assets/js/layout.js')}}"></script>
	<script src="{{asset('css/assets/js/theme-color.js')}}"></script>
	<!-- Material -->
	<script src="{{asset('css/assets/plugins/material/material.min.js')}}"></script>
	<!-- animation -->
	<script src="{{asset('css/assets/js/pages/ui/animations.js')}}"></script>
	<!-- end js include path -->
	
	 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <h4 class="modal-title">Modal Heading</h4> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="input-group input-group-sm">
			<input type="text" class="form-control in_l " placeholder="First Name">			
			</div>
			<div class="input-group input-group-sm pt-1">
			<input type="text" class="form-control in_l " placeholder="Last Name">			
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
		<button class="btn blue-bgcolor" target="_blank"> Add</button>
          <button type="button" class="btn blue-bgcolor" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

 
</body>
</html>