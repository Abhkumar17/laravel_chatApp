<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta name="description" content="" />
  <meta name="author" content="" />
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Datatables JS CDN -->
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

	<!--bootstrap -->
	<!-- Material Design Lite CSS -->
	<!-- animation -->
	<!-- Template Styles -->
	<style>
	thead tr{background-color: #e5e5e5;text-align: center;}
	tr td {
	text-align:center;
	}
	tr th{
	text-align: center;
	}

	</style>
    <script>  
         $(function() {  
            $( "#datepicker-1" ).datepicker();  
         });  
    </script> 
	<script>  
         $(function() {  
            $( "#datepicker-2" ).datepicker();  
         });  
    </script>
	<script>  
         $(function() {  
            $( "#datepicker-3" ).datepicker();  
         });  
    </script>
	<script>  
         $(function() {  
            $( "#datepicker-4" ).datepicker();  
         });  
    </script>
	<script>  
         $(function() {  
            $( "#datepicker-5" ).datepicker();  
         });  
    </script>
	<script>  
         $(function() {  
            $( "#datepicker-6" ).datepicker();  
         });  
    </script>

	<script type="text/javascript">
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});
</script>
<script>
	   $(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
	</script>
	 <style>
     .body_i {
    background: url(../public/userimages/Triangle1.jpg);
    }
  </style>
</head>
<!-- END HEAD -->
<body class="body_i page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
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
					
					<!-- start widget -->
					<div class="">
						<div class="row">                            						
						  <div class="col-xl-12 mb-2">										  
								<div class=" card-box pb-3"> 
								 <div class="card-body " id="bar-parent1">
									<div class="tabs">
									  <div class="tab-button-outer">
										<ul id="tab-button">
										  <li><a href="#tab01">Agent/Customer</a></li>
										  <li><a href="#tab02">Chats</a></li>
										  <li><a href="#tab03">Leads Acquired</a></li>
										</ul>
									  </div>
									  <div class="tab-select-outer">
										<select id="tab-select">
										  <option value="#tab01">Operators</option>
										  <option value="#tab02">Tab 2</option>
										  <option value="#tab03">Tab 3</option>
										</select>
									  </div>

<div id="tab01" class="tab-contents">
<p>
<form method="POST" action="{{ url('/admin/analytics') }}" autocomplete="off">						
 {{ csrf_field() }}				    			
									
<div class="row pt-3">
    <div class="col-lg-3">
     	
	<div class="row">
		<div class="col-md-3">
			<label for="sort">Agent:</label>
		</div>
	<div class="col-md-9">
		<div class="form-group">
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			<?php 
             $agent = DB::table('users')->select('*')->where('type','=','agent')->orderBy('id', 'ASC')->get();
			?>
				<select id="agentid" name="agentid" class="form-control" required="true">
					<option value="" >Select</option>
					@foreach($agent as  $agents)
					<option value="{{ $agents->session_id }}">{{ $agents->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div> 
</div>
</div>
													
<div class="col-md-1 ">													
	<label for="sort" class="float-right">Date:</label>													
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-md-6">															
		     <input type="date" name="from" autocomplete="off" class="form-control" id="from" placeholder="Start Date"  required="true" />
		</div>
		<div class="col-md-6">
		     <!--<input type="text" name="to" autocomplete="off" class="form-control" id="datepicker-2" placeholder="End Date">-->
		     <input type="date" name="to" autocomplete="off" class="form-control" id="to" placeholder="End Date" required="true">
		</div>
	</div>

</div>
<div class="col-md-4">
<!-- <input type="submit" class="btn btn-round btn-primary sear_p" name="submit" value="Search"> 
<br><br>--> 
 <button type="submit" class="btn btn-round btn-primary" name="search">Search</button>

 <!--<button type="submit" class="btn btn-round btn-primary" name="exportPDF">Export PDF</button>-->

 <button type="submit" class="btn btn-round btn-primary" name="exportExcel">Export Excel</button>
<!-- type="submit" class="btn btn-round btn-primary sear_p">Search</button> -->														
</div>
													
</div>
</form>
<hr>

<div class="row">
	
	<div class="col-lg-12 mb-3">
	<div class="card-body ">
    <table class="table table-bordered display full-width dataTable no-footer" id="laravel_datatable" role="grid" style="width:100%">
                <tr>
                
                <th>Sender Name</th>
                <th>Receive Name</th>
                <th>Messages</th>
                <th>Date</th>
                </tr>
                @foreach ($ViewsPage as $ViewsPages)
            <?php 
           
            $chatname = DB::table('users')->select('*')->where('session_id','=',$ViewsPages->receive_id)->first();
            $receivename=$chatname->name;
			
			?>    
                    <tr>
                        
                        <td>{{ ucwords($ViewsPages->sender_username) }}</td>
                        <td>{{ ucwords($receivename) }}</td>
                        <td>{{ $ViewsPages->message }}</td>
                        <td>{{ date('d M h:i A',strtotime($ViewsPages->created_at)) }}</td>
                    </tr>
                @endforeach
            </table>
	    <!-- <header class="operator-name text-center"><span>santosh@vert-age.com</span></header> -->
	</div>
	</div>
</div>
<div class="row pt-3">
<div class="col-lg-12" style="padding:0px !important">
	<div class="">
		<!-- <div class="col-md-12 text-center">
       <button type="button" class="btn btn-round btn-primary">Import</button>											
        </div> -->
		<div class=" ">
			<div class="table-scrollable">
				
			</div>
		</div>
	</div>
</div>


</div>
										  	</p>
									    </div>
									  <div id="tab02" class="tab-contents">
									<!-- 	<h2 class="laq"> <i class="fa fa-random" aria-hidden="true" style="color: #ccc;"></i> Messages / Chats</h2>
									 --><p>
										   
											
											
											
												<div class="row">
													<div class="col-lg-12 ">
														
														<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
															<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
											<div class="row pt-3">
											        <div class="col-xl-3 ">
													    <h2 class="laq"> <i class="fa fa-random" aria-hidden="true" style="color: #ccc;"></i> Messages / Chats</h2>
									
													</div>
												    <div class="col-xl-3 offset-md-2">													
														<div class="form-group">
															<div class="input-group mb-2 mr-sm-2 mb-sm-0">
															
																<select id="operatorDataSettings" class="form-control">
																	<option value="messages" selected="">Daily</option>
																	<option value="react">Monthly</option>
																</select>
															</div>
														</div>														
													</div>
													
																										
													<div class="col-md-3">
													    <div class="row">
													        <div class="col-md-6">															
															     <input type="text" name="startdate" class="form-control" id="datepicker-3" placeholder="Start Date" />
															</div>
															<div class="col-md-6">
															     <input type="text" name="enddate" class="form-control" id="datepicker-4" placeholder="End Date">
															</div>
														</div>													
													</div>
													 <div class="col-lg-1">
														<button type="button" class="btn btn-round btn-primary sear_p">Search</button>														
													</div>
											</div>
														<div class="row pt-3">
															<div class="col-md-12">
																<div class="">
																	<div class="card-head">
																		<header>LINE CHART</header>
																		
																	</div>
																	<div class="card-body " id="chartjs_line_parent">
																		<div class="row"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																			<canvas id="chartjs_line" width="968" height="424" style="display: block; width: 968px; height: 424px;"></canvas>
																		</div>
																	</div>
																</div>
															</div>
														</div>
															</div>
															<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
															
																<div class="row pt-3">
											        <div class="col-xl-3 ">
													    <h2 class="laq"> <i class="fa fa-random" aria-hidden="true" style="color: #ccc;"></i> Reaction Time </h2>
									
													</div>
												    <div class="col-xl-3 offset-md-2">
													
															<div class="form-group">
																<div class="input-group mb-2 mr-sm-2 mb-sm-0">
																
																	<select id="operatorDataSettings" class="form-control">
																		<option value="messages" selected="">Daily</option>
																		<option value="react">Monthly</option>
																	</select>
																</div>
															</div>
														
													</div>
													
													<div class="col-md-3">
													    <div class="row">
													        <div class="col-md-6">															
															     <input type="text" name="startdate" class="form-control" id="datepicker-5" placeholder="Start Date" />
															</div>
															<div class="col-md-6">
															     <input type="text" name="enddate" class="form-control" id="datepicker-6" placeholder="End Date">
															</div>
														</div>													
													</div>
													 <div class="col-lg-1">
														<button type="button" class="btn btn-round btn-primary sear_p">Search</button>														
													</div>
											</div>
											
											<div class="row">
												<div class="col-md-12 mt-3">
													<div class="">
														<div class="card-head">
															<header>BAR CHART</header>
															
														</div>
														<div class="card-body " id="chartjs_bar_parent">
															<div class="row"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
																<canvas id="chartjs_bar" width="968" height="424" style="display: block; width: 968px; height: 424px;"></canvas>
															</div>
														</div>
													</div>
												</div>
											</div>
															
															
															</div>
															
														</div>
														<nav>
															<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
																<a class="nav-item nav-link active stats-column messages" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><span class="value">Messages / Chats</span></a>
																<a class="nav-item nav-link stats-column messages2" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><span class="value">Reaction Time, (New Conversation)</span></a>
																</div>
														</nav>
													
													</div>
												</div>
											
											
										</p>
									  </div>
									  <div id="tab03" class="tab-contents">
										<h2 class="laq">Your insights will be available soon</h2>
										<p class="p_l">We are still gathering conversion data for you. Come back in a few days to 
										start tracking conversions on your website. We’ll show you actionable insights, 
										so you'll see what’s working and what’s not.
										<div class="css-1du7e9h e1bslx2k5"></div>
										</p>
									  </div>
									  
									</div>
								</div>                               
										
								</div>		
										
						</div>						
					</div>
					<!-- end widget -->
					<!-- chart start -->
					
			
					
					
				
				</div>
			</div>
		
			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2020 &copy; Vert-Age By
				<a href="https://www.vert-age.com/" target="_blanck" class="makerCss">Vert-Age</a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	     

	<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">      
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
	

	<script src="{{asset('css/assets/plugins/popper/popper.min.js')}}"></script>
	<script src="{{asset('css/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
	<script src="{{asset('css/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('css/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--Chart JS-->
	<script src="{{asset('css/assets/plugins/chart-js/Chart.bundle.js')}}"></script>
	<script src="{{asset('css/assets/plugins/chart-js/utils.js')}}"></script>
	<script src="{{asset('css/assets/js/pages/chart/chartjs/chartjs-data.js')}}"></script>
	<!-- Common js-->
	<script src="{{asset('css/assets/js/app.js')}}"></script>
	<script src="{{asset('css/assets/js/layout.js')}}"></script>
	<script src="{{asset('css/assets/js/theme-color.js')}}"></script>
	<!-- Material -->
	<script src="{{asset('css/assets/plugins/material/material.min.js')}}"></script>
	<!-- animation -->
	<script src="{{asset('css/assets/js/pages/ui/animations.js')}}"></script>
	<!-- end js include path -->
  	<script>
  		function exportreport(){
            $.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});
  			var agentid = $("#agentid").val();
  			//var startdate = $("#datepicker-1").val();
  			//var enddate = $("#datepicker-2").val();
  			//alert(agentid);
  			var url="{{url('/admin/analytics/chatreport')}}";
  			$.ajax({
		           type:'POST',
		           url:url,
		           data:{"agentid":agentid },//,"startdate":startdate,"enddate":enddate},
		           dataType: "json",
		           success:function(data){
		             console.log(data);
		              json_data(data,roll);

		           }
		        });
  		}
  	</script>

</body>
</html>