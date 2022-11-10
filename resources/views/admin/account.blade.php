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


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Datatables JS CDN -->
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<!--bootstrap -->
	<!-- Material Design Lite CSS -->
	<!-- animation -->
	<!-- Template Styles -->
	<script type="text/javascript">
/*$(function() {

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

});*/
</script>
<script>
  /*$(function() {
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
});*/
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
          
           <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-12">
              <div class="card-box">
                <div class="card-head">
                  <header>Account</header>
                                
                </div>
                <div class="card-body ">                     
                  <form action="{{url('/admin/accountupdate')}}" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
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
                    @foreach($User as $Users)
                    <div class="form-body">
                      <div class="form-group row">
                        <label class="control-label col-md-2">Name </label>
                        <div class="col-md-3">
                        <input type="text" name="name" value="{{$Users->name}}" data-required="1" class="form-control"> </div>
                      </div>
                     
                      <div class="form-group row">
                        <label class="control-label col-md-2">Your Picture </label>
                        <div class="col-md-3">
                          <div class="" style="width: 20%; float: left;">
                          

                          <img id="thumbnil" style="padding: 3px; width: 49px; height: 49px; border: 1px solid #ccc; border-radius: 2px;"  src="{{asset('public/userimages/')}}/<?php echo $Users->image;?>" alt="user"/>
                          </div>
                           <div class="" style="float: left; width: 72%; margin-left: 10px; margin-top: 10px;">
                          <input type="hidden" value="<?php echo $Users->image;?>" name="oldimg">
                          <!-- <input type="file" accept="image/*" style="font-size: 12px;"  onchange="showMyImage(this)" /> -->
                          <input type="file"  style="font-size: 12px;" name="newimage" />
                          </div>                        
                          
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-2">Email </label>
                        <div class="col-md-3">
                          <input name="email" type="text" value="{{$Users->email}}" class="form-control"> 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-2">Password </label>
                        <div class="col-md-3">
                          <a href="" data-toggle="modal" data-target="#agentModal" style="margin-top: 6px; position: absolute; font-size: 14px;">Change Password</a>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-2">State </label>
                        <div class="col-md-3">
                        <input name="state" readonly="ture" type="text" value="{{$Users->regionname}}" class="form-control"> </div>
                      </div>
                      
                      <div class="form-group row">
                        <label class="control-label col-md-2">City </label>
                        <div class="col-md-3">
                          <input name="city" readonly="ture" type="text" value="{{$Users->city}}" class="form-control"> 
                        </div>
                      </div>  
                      
                      <div class="form-group row">
                        <label class="control-label col-md-2">Country </label>
                        <div class="col-md-3">
                          <input name="country" readonly="ture" type="text" value="{{$Users->country}}" class="form-control"> 
                        </div>
                      </div> 


                      </div>
                    </div>
                    <div class="form-group">
                      <div class="offset-md-2 col-md-2">
                        <button type="submit" class="btn btn-info">Update</button>
                      </div>
                    </div>
                  @endforeach
                  </form>




                </div>  
               </div>
             </div>
           </div>
 
<!-- end widget -->
<!-- chart start -->
			 </div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			
		</div>
		<!-- end page container -->
		<!-- start footer -->
		@include('admin.commanadmin.footer')
		<!-- end footer -->
	</div>
	
	


<div id="agentModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog model">
        <div class="modal-content">
  <form method="post" id="agent_form" enctype="multipart/form-data" action="{{url('/admin/changepassword')}}">
                <div class="modal-header">
                  <h4 class="modal-title">Change password</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
                
                <div class="modal-body">
                   {{ csrf_field() }}
                    <span id="form_output"></span>
                    <!-- <div class="form-group">
                        <label>Current password</label>
                        <input type="password" name="cp" id="pass" class="form-control" required="required" />
                    </div> -->
                    <div class="form-group">
                        <label>New password</label>
                        <input type="password" name="npass" placeholder="New password" id="npass" class="form-control" required="required"/>
                    </div>
                    <!-- <div class="form-group pass">
                        <label>Repeat new password</label>
                        <input type="Password" name="password" id="rnpass" class="form-control" required="required"/>
                    </div> -->
                                     
                    <div class="modal-footer" style="float: left;">
                    <button type="submit" class="btn btn-info">Change Password</button>
                    </div>
            </form>
        </div>
    </div>
</div>

  <script>
        function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }

  </script>
	<!-- <script src="{{asset('css/assets/plugins/jquery/jquery.min.js')}}"></script> -->
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


</body>
</html>