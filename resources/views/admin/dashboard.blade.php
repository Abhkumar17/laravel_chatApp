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
					
					<div class="">
						<div class="row">
							
							<div class="col-xl-3 col-md-3 col-12">
								<div class="card card-box" >
								<div class="">
									<!-- <form class="search-form-opened" action="#" method="GET"> -->
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search..." style="background-color: #fff !important; border: 0px !important;" id="serch_box" onkeyup="serch_box_filer()">
											<span class="input-group-btn search-btn">
												<a href="javascript:;" class="btn submit" style="margin-top: 5px;">
													<i class="icon-magnifier"></i>
												</a>
											</span>
										</div>
									<!-- </form> -->
								</div>
								<div class="card-body no-padding height-9">
									<div class="row text-center">
										<div class="col-xl-12" style="    height: 655px;
    overflow-y: auto;">
											<div class=" scroll_all">
@foreach($user as  $users)
<?php 
$id=$users->session_id;
$colorcode=$users->color;
$findagentid = DB::table('chats')->select('*')->where('customer_id', $id)->get();

?>
<?php foreach ($findagentid as $findagentids) : 
    $ag_id=$findagentids->agent_id;
?>
<?php if($ag_id==''){?>

<div class="sidebar_userpic3 img_lk customer_details"  id="customeractive" data-email="{{$users->email}}" data-name="{{$users->name}}" data-customer_id="{{$users->session_id}}" data-colorcode="{{$colorcode}}"
data-agent_id="{{ $ag_id }}" data-mobile="{{$users->mobileno}}" data-ip="{{$users->ip_address}}"
data-regioncode="{{$users->regioncode}}" data-city="{{$users->city}}"data-country="{{$users->country}}" >
										 
<span style="float: left;">
    <svg width="40" height="40"><circle cx="20" cy="20" r="15" fill="{{$colorcode}}"></circle><circle cx="30" cy="32" r="5" stroke-width="3" fill="#28a745" /><text x="50%" y="54%" text-anchor="middle" fill="white" font-size="16px" font-family="Arial" dy=".3em">{{ ucfirst($users->email[0]) }}</text></svg>
</span>
<p  class="text-muted m-0 p_font_i2">

	<a href="#" data-toggle="tooltip" data-placement="bottom" title="{{$users->name}}" style="margin-top: 10px;" >{{$users->email}}</a>
	<span style="color:black;float: right;font-size: 9px;">Feb 9</span>
</p>

</div>
<?php }else{ ?>
<div class="sidebar_userpic3 img_lk customer_details"  id="customeractive" data-email="{{$users->email}}" data-name="{{$users->name}}" data-customer_id="{{$users->session_id}}" data-colorcode="{{$colorcode}}"
data-agent_id="{{ $ag_id }}" data-mobile="{{$users->mobileno}}" data-ip="{{$users->ip_address}}"
data-regioncode="{{$users->regioncode}}" data-city="{{$users->city}}"data-country="{{$users->country}}" >
										 
<span style="float: left;">
	<a href="#"  data-toggle="tooltip" data-placement="bottom" title="{{$users->name}}" style="margin-top: 10px;" >
		<svg width="40" height="40"><circle cx="20" cy="20" r="15" fill="{{$colorcode}}"></circle><circle cx="30" cy="32" r="5" stroke-width="3" fill="#28a745" /><text x="50%" y="54%" text-anchor="middle" fill="white" font-size="16px" font-family="Arial" dy=".3em">{{ ucfirst($users->name[0]) }}</text></svg></a>
</span>
<p  class="text-muted m-0 p_font_i2">
    
	<a href="#"  data-toggle="tooltip" data-placement="bottom" title="{{$users->name}}" style="margin-top: 10px;" >{{ucfirst($users->name)}}</a><br>
	<a href="#" data-toggle="tooltip" class="letchat_fon" title="{{$users->email}}">{{$users->email}}</a>
	<span style="color:black;float: right;font-size: 9px;">Feb 9</span>
</p>
</div>
<?php } ?>
<?php endforeach; ?>
@endforeach
</div>
</div>
                                        
</div>
									
</div>
</div>
<!-- /.info-box -->
</div>
<!-- /.col -->
						
<div class="col-xl-6 col-md-6 col-12">
		<div class="card card-box  chat_detail" style="display: none;">
		
		
		<div class="card-body height-9 ">
		    <div class="row">
				 <div class="col-xl-12">
					<div class="border_w log-separator text-center"><span><b>Chat Board </b></span></div>
				</div>
			</div>
<div class="chat_scroll chat-panel ">
    <!-- <div class="row">
	     <div class="col-xl-12">
		    <div class="log-separator text-center"><span><b>Mar 2, 2020</b></span>
		    </div>
		</div>
	</div> -->
</div>	

<div class="row">											   
    <div class="col-xl-12 text-center">
	<input type="text" class="input_border" placeholder="Enter Your Message..." id="suggestionadmin" name="suggestionadmin" >
	<button id="fab_send" class="fab" style="border: none;" onclick="admin_pic_message(this)" type="submit"><i class="material-icons" style="font-size: 18px;border: none;">send</i>
         </button>	
   <!-- <input type="file" class="file_in"><i class="fa fa-paperclip" aria-hidden="true"></i> --> 										
    </div>
</div>
					<div class="row">											   
					    <div class="col-xl-12 mt-4">	
                            <a href="javascript:void(0);" class="ml-3">
							<i class="fa fa-commenting-o" aria-hidden="true"></i> 
							<span class="span_color">Chat</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:void(0);" class="" data-toggle="modal" data-target="#email"><i class="fa fa-envelope-o" aria-hidden="true"></i>	 <span class="span_color">Email</span></a>	
                            <!-- <a href="javascript:void(0);" class="btn btn-info float-right mr-4">Reply</a> -->													
						</div>
					</div>
				
				
	</div>
		<!-- /.info-box -->
	</div>
	
	<!-- /.col -->
</div>
						
						<div class="col-xl-3 mb-2  show_profie" style="display: none;">										  

                        <div class=" card-box pb-3 scroll_all2" >
								 <div class="card-head ">									
									<div class="row">
									    <div class="col-lx-6 ml-4">
										    <p class="p_e">
											<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;<span class="detail_city"></span>
											<span class="detail_regioncode"></span>
											<span class="detail_country"></span>
											</p>
										</div>							
					
									</div>
									
									
								</div> 
								 <div class="card-body " id="bar-parent1">
									<form class="form-horizontal">
										<div class="user-panel pt-0">
												<div class="row">
													<div class="sidebar-userpic detail_img">
														<!-- <img src="{{asset('css/assets/img/user2-160x160.jpg')}}" class="img-responsive" alt=""> --> 
													</div>
												</div>
												<div class="profile-usertitle pb-0">
													<div class="sidebar-userpic-name detail_email"> </div>
													<div class="profile-usertitle-job"><a href="javascript:void(0);" class="" data-toggle="modal" data-target="#myModal">Add Name</a></div>
												</div>												
											</div>
											<div class="">
											   <p class="p_e"> <i class="fa fa-envelope-o" aria-hidden="true"></i> 
											   <span class="ml-2 detail_email"> </span>
											   
											    <div class="dropdown">
													<button type="button" class="btn dropdown-toggle btn_s" data-toggle="dropdown" style="margin-bottom: -6px;">
													  Dropdown button
													</button>
													<div class="dropdown-menu">
													  <a class="dropdown-item" href="#">Unsubscribed</a>
													  <a class="dropdown-item" href="#">Subscribed</a>
													  <a class="dropdown-item" href="#">Link 3</a>
													</div>
												  </div>
											   </p>
											  
												 <p class="p_e"> 
											   <span>
												   <div class="input-group input-group-sm">
												   <i class="fa fa-phone mt-2" aria-hidden="true"></i>
													<span class="ml-3 detail_mobile admin_p"> </span>
													
													</div>
													</span>
											</p>
											   <p class="p_e"> <i class="fa fa-window-maximize" aria-hidden="true"></i> <span class="ml-2"> Chrome 80, Windows </span></p>
											   <p class="p_e"> <i class="fa fa-compass" aria-hidden="true"></i> <span class="ml-2 detail_ip"> </span></p>
											   <p class="p_e"> 
											   <span>
												   <div class="input-group input-group-sm">
												   <i class="fa fa-stop mt-2" aria-hidden="true"></i> 
													<input type="text" class="admin_p form-control in_l" placeholder="Add a Contact Property...">
													<span class="input-group-btn">
														<button type="button" class="btn btn-info btn-flat btn_p">
														<i class="fa fa-plus icon_pl" aria-hidden="true"></i></button>
													</span>
													</div>
													</span>
											</p>
											</div>
									</form>
								</div>
                                 <div class="col-xl-12 mt-2">
								     <div class="card card-box card-body">
						
								     <p class="p_e"> 
											   <span>
												   <div class="input-group input-group-sm">
												   <i class="fa fa-phone mt-2" aria-hidden="true"></i>
													<input type="text" class="admin_p form-control in_l" placeholder="Add a tag...">
													
													</div>
													</span>
											</p>
							
                                </div>								
								</div> 								
							
								
								
								 <div class="col-xl-12 mt-2">
								     <div class="card card-box card-body">
									   <span>
										
										   <div class="input-group input-group-sm">
										   <i class="fa fa-star-o" aria-hidden="true" style="position: absolute; top: 19px;"></i>
											<p class="ml-4 m-0 admin_p" >Chat Rating</p>
											<a href="javascript:void(0);" class="admin_p ml-4" data-toggle="modal" data-target="#chat_rating">Ask visitor for an opinion <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
											
											</div>
											</span>
                                </div>								
								</div> 
		                        <div class="col-xl-12 mt-2">
								    <div class="card card-box">
									    <span>										
										   
										  <div class="card card-box">
							
								<div class="card-body" id="line-parent">
									<div class="panel-group accordion" id="accordion3">
									
										<div class="">										
													<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2" aria-expanded="false"><i class="fa fa-align-left" aria-hidden="true"></i> Notes <i class="fa fa-angle-down mt-2" aria-hidden="true" style="    float: right;"></i></a>
											
											
	<div id="collapse_3_2" class="panel-collapse collapse">
		<div class="">
		<textarea class="form-control" rows="3" placeholder="Here you can put some notes about your visitor..."></textarea>
		
			<p class="mt-2">
				<button class="btn blue-bgcolor" target="_blank"> Add</button>
			</p>
		</div>
	</div>
</div>
										
									</div>
								</div>
							</div>																		
										</span>
                                    </div>								
								</div> 
										
								</div>		
										
						</div>
					
					
					
					
					<!-- end widget -->
					<!-- chart start -->
					
					
					
				
				</div>
			</div>
		<!-- 	<br><br><br><br><br><br><br> -->
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
  <!-- <script src='http://code.jquery.com/jquery-1.11.3.min.js'></script> -->
  <script >
  
 //var session_id=Auth::User()->session_id;
 //var receive_id='';
$('.customer_details').on('click',function() {
  
   $('.show_profie').show();
   $('.chat_detail').show();
   
   session_id=$(this).data('customer_id');
   receive_id=$(this).data('agent_id');
   //alert(session_id);
   var customer_email=$(this).data('email');
   var customer_name=$(this).data('name');
   
   var customer_mobile=$(this).data('mobile');
   var customer_ip=$(this).data('ip');
   var customer_regioncode=$(this).data('regioncode');
   var customer_city=$(this).data('city');
   var customer_country=$(this).data('country');
   var custsession=$(this).data('customer_id');
   var colorcode=$(this).data('colorcode');
    
     $('.detail_email').html(customer_email);
     var img='<svg width="50" height="50"><circle cx="25" cy="25" r="20" fill="'+colorcode+'"></circle><circle cx="39" cy="40" r="5" stroke-width="3" fill="#28a745" /> <text x="50%" y="54%" text-anchor="middle" fill="white" font-size="25px" font-family="Arial" dy=".3em">'+customer_email.slice(0,1).toUpperCase()+'</text></svg>';
     $('.detail_img').html(img);
     $('.detail_mobile').html(customer_mobile);
     $('.detail_ip').html(customer_ip);
     var customer_regioncode='('+customer_regioncode+')';
     $('.detail_regioncode').html(customer_regioncode);
     $('.detail_city').html(customer_city);
     $('.detail_country').html(customer_country);
     agentfetch_custo_record();

});	


var session_id=session_id;
var receive_id=receive_id;


//alert(session_id);
    $(document).ready(function (e) {
  
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var file_path='';
        $('#image').change(function(){

            $('#ajax-image-upload-form').submit();
                
        });
 
        $('#ajax-image-upload-form').change(function(e) {
            e.preventDefault();
 
            var formData = new FormData(this);
                formData.append('sessionid',session_id);
                formData.append('receive_id',receive_id);
            $.ajax({
              type:'POST',
              url: "{{ url('/Agent/dashboard/documentupload')}}",
              data: formData,
              cache:false,
              contentType: false,
              processData: false,
              success:(data) => {
                 this.reset();
                     $('#display-image-preview').hide();
                     $("#loader").hide();
                       recived_msg_type(data.ext,'sender','',data.file_path);

                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

function admin_pic_message(){
 var  suggestionadmin = $('#suggestionadmin').val();
 //alert(suggestionadmin);
 if(suggestionadmin!=''){ 
  notification(suggestionadmin);
  $('#suggestionadmin').val('');
  }
}

$(document).ready(function()
{
    //getalluser();
    pullData();

    $(document).keyup(function(e) {
      var  suggestionadmin = $('#suggestionadmin').val();
      //if($.trim(suggestionadmin.length)>0){
             if (e.keyCode == 13){
             	//alert(suggestionadmin);
                        notification(suggestionadmin);
                      $('#suggestionadmin').val('');
 
                      }//else{
                          //isTyping();
                      //}
               //}else{
                //notTyping();
               //}
    });
});

function pullData()
{
    
    livechating_admin();
    setTimeout(pullData,3000);
}

function livechating_admin()
{
	//alert(session_id);
    var data_html= {'sessionid':session_id,'receive_id':receive_id};
    var url="{{ url('/chats/livechating_admin') }}";
    Ajax_call(data_html,url,'live_chat')
}
/*function getalluser()
{
    var data_html= {'sessionid':session_id};
    var url="{{ url('/Agent/dashboard/getalluser') }}";
    Ajax_call_get(data_html,url,'allcustomer')
}*/
function retrieveChatMessages()
{
    var data_html= {'sessionid':session_id,'receive_id':receive_id,'admin_seen':'admin'};
    var url="{{ url('/chats/retrieveChatMessages') }}";
    Ajax_call(data_html,url,'recived')
}
function notification(suggestionadmin){
   //$('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator float-right img_lk2"><p class="m-0 pr-2 float-right p_w chat_bg">Admin:  '+suggestionadmin+'</p></div></div><div style="width:100%"><p class="p_right">07:08</p></div></div>');
    
    //$(".chat-panel").animate({ scrollTop: $('#chat-panel').prop("scrollHeight")}, 1);
    var data_html= { "suggestionadmin":suggestionadmin,'sessionid':session_id,'receive_id':receive_id,'text_type':'A'};
    var url="{{ url('/chats/notificationsend') }}";
    Ajax_call(data_html,url,'send');
}

function serch_box_filer() 
{
var input, filter, ul, li, a, i, txtValue;
input = document.getElementById("serch_box");
filter = input.value.toUpperCase();

alert(filter);
}

function sendMessage(msg){
   
    $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator img_lk2"><p class="m-0 pr-2 p_w chat_bg">'+suggestionadmin+'</p></div></div><div style="width:100%"><p class="p_right ">07:08</p></div></div>');
    $(".chat-panel").animate({ scrollTop: $('#chat-panel').prop("scrollHeight")}, 1);

    var data_html= { "msg":msg,'sessionid':session_id,'receive_id':receive_id,'text_type':'A'};
    var url="{{ url('/chats/ajaxRequest') }}";
    Ajax_call(data_html,url,'send');
    notTyping();
 }
 

function isTyping()
{
      var data_html= {'sessionid':session_id,'receive_id':receive_id};
       var url="{{ url('/chats/isTyping') }}";
      Ajax_call(data_html,url);         
}

function notTyping()
{
      var data_html= {'sessionid':session_id,'receive_id':receive_id};
      var url="{{ url('/chats/notTyping') }}";
      Ajax_call(data_html,url);
      /*$.post('http://localhost/chats/public/notTyping)',
       {username: username});*/
}

function agentfetch_custo_record()
{
      var data_html= {'sessionid':session_id,'receive_id':receive_id};
      var url="{{ url('/chats/agentfetch_custo_record') }}";
      Ajax_call(data_html,url,'msg_fetch');
      
}

 $("#registration").submit(function(event){
   event.preventDefault();
   
   var data_html=$('#registration').serialize()+'&sessionid='+session_id;
   var url="{{ url('/chats/registration') }}";
   Ajax_call(data_html,url,'registration');
   $('#email').val('');
   $('#mobileno').val('');
});
function typing_live_on() {
     $('#live_chattypeing').show();
}
function typing_live_off() {
     $('#live_chattypeing').hide();
}
function Ajax_call(data_html,url,roll){
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
           type:'POST',
           url:url,
           data:data_html,
           dataType: "json",
           success:function(data){
             
              json_data(data,roll);

           }
        });
}

function Ajax_call_get(data_html,url,roll){
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax({
           type:'get',
           url:url,
           data:data_html,
           dataType: "json",
           success:function(data){
             console.log(data);
              json_data(data,roll);
           }
        });
   }
 
function json_data(data,roll){
	console.log(data);
      if(roll=='recived'){
        if(data.id>0){
         recived_msg_type(data.ext,'recived',data.message,data.file,data.text_type,data.notification_admin,data.created_at);
        }
   }
   if(roll=='registration'){
        session_id=data.Seesion_id
           
   }
    if(roll=='msg_fetch'){
        $('.chat-panel').html('');
            $.each(data, function(key,value) {
              //console.log(value);
                        var ext=value['ext'];
                        var message=value['message'];
                        var file=value['file'];
                        var type=value['text_type'];
                        var notification=value['notification_admin'];
                        var new_date=new Date(value['created_at']);
                      if(value['text_type']=='A'){
                  recived_msg_type(ext,'recived',message,file,type,notification,new_date);
                      }else{
                  recived_msg_type(ext,'recived',message,file,type,notification,new_date);
                       }
                     })
                
            $(".chat-panel").animate({ scrollTop: $('.chat-panel').prop("scrollHeight")}, 1);
   }

    if(roll=='live_chat'){
         if(data.messages=='Y'){
           retrieveChatMessages();
         }
          if(data.istype=='Y'){
             typing_live_on();
            
         }else{
            typing_live_off();
         }
                
   }
     if(roll=='allcustomer'){
     
      if(data.length > 0){
       $.each(data, function(key,value) 
        {
          var new_date=new Date(value.created_at);

        var img='<svg width="50" height="50"><circle cx="25" cy="25" r="20" fill="#2196f3"></circle> <text x="50%" y="54%" text-anchor="middle" fill="white" font-size="25px" font-family="Arial" dy=".3em">'+value.email.slice(0,1).toUpperCase()+'</text></svg>';
         
        $('#customeractive').append('<div data-src="'+value.email.slice(0,1).toUpperCase()+'" data-name="'+value.email+'" data-custname="'+value.name+'" data-receive_id="'+value.session_id+'" class="friend-drawer friend-drawer--onhover customer_details">'+img+'<div class="text"><h6>'+value.name+'</h6><p class="text-muted"><a href="#" data-toggle="tooltip" data-placement="bottom" title="What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry standard">'+value.email+'</a></p></div><span class="time text-muted small">'+ timeAgo(new_date)+'</span></div><hr>');
        });
      }
    }
}
 

function recived_msg_type(ext,sere,msg,file,type,notification,new_date){
var file_path="{{asset('public/doc/')}}";
const imgextansion = [
  'jpeg', 'png', 'jpg', 'gif', 'svg'
];

const fileextansion = [
  'docx', 'pdf', 'CSV', 'doc', 'txt'
];
  //alert(type);
if(type=='A'){
if(jQuery.inArray(ext, imgextansion) != -1) {
      $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator img_lk2_img"><p class="m-0 pr-2 float-right p_w chat_bg"><img src="'+file_path+'/'+file+'" class="img" style="width: 80px;"></p></div></div></div>');
     } else if(jQuery.inArray(ext, fileextansion) != -1){
          $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator img_lk2_img"><a href="'+file_path+'/'+file+'" class="img">'+file+'</a></div></div></div>');
      }
     else {
     	
     	if(notification==null && type=='A'){
      $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator img_lk2"><p class="m-0 pr-2 float-right p_w chat_bg">Agent: '+msg+'</p></div></div><div style="width:100%; float:right;"><p class="p_right right_pp">'+ timeAgo(new_date)+'</p></div></div>');
  }else{
   $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="log-separator mg_lk2"><p class="m-0 pr-2 float-right p_w chat_bg">Notification: '+msg+'</p></div></div><div style="width:100%; float:right;"><p class="p_right right_pp">'+ timeAgo(new_date)+'</p></div></div>');

  }
     }
      
      $(".chat-panel").animate({ scrollTop: $('.chat-panel').prop("scrollHeight")}, 1);
     

}else{
    if(jQuery.inArray(ext, imgextansion) != -1) {
      $('.chat-panel').append('<div class="ro session_it"><div class="col-xl-12"><div class="sidebar_userpic2 img_lk"><p class="text-muted m-0 p_font_i"><img src="'+file_path+'/'+file+'" class="img"></p></div><p class="time_ri">07:08</p></div></div>');
     }else if(jQuery.inArray(ext, fileextansion) != -1){

          $('.chat-panel').append('<div class="row mb-2 left"><div class="col-xl-12"><div class="sidebar_userpic2 img_lk"><p class="text-muted m-0 p_font_i"><a href="'+file_path+'/'+file+'" class="img">'+file+'</a></p></div><p class="ml-4 pl-3 time_ri">07:08</p></div></div>');
     }
    else {
     $('.chat-panel').append('<div class="row mb-2"><div class="col-xl-12"><div class="sidebar_userpic2 img_lk"><p class="text-muted m-0 p_font_i">Customer: '+msg+'</p></div><p class="time_ri">'+ timeAgo(new_date)+'</p></div></div>');
       }
     $(".chat-panel").animate({ scrollTop: $('.chat-panel').prop("scrollHeight")}, 1);


     

   }
}
</script>


<script type="text/javascript">
const MONTH_NAMES = [
  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June',
  'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
];


function getFormattedDate(date, prefomattedDate = false, hideYear = false) {
  const day = date.getDate();
  const month = MONTH_NAMES[date.getMonth()];
  const year = date.getFullYear();
  const hours = date.getHours();
  let minutes = date.getMinutes();

  if (minutes < 10) {
    // Adding leading zero to minutes
    minutes = `0${ minutes }`;
  }

  if (prefomattedDate) {
    // Today at 10:20
    // Yesterday at 10:20
    return `${ prefomattedDate } at ${ hours }:${ minutes }`;
  }

  if (hideYear) {
    // 10. January at 10:20
    return `${ day }. ${ month } at ${ hours }:${ minutes }`;
  }

  // 10. January 2017. at 10:20
  return `${ day }. ${ month } ${ year }. at ${ hours }:${ minutes }`;
}


// --- Main function
function timeAgo(dateParam) {
  if (!dateParam) {
    return null;
  }

  const date = typeof dateParam === 'object' ? dateParam : new Date(dateParam);
  const DAY_IN_MS = 86400000; // 24 * 60 * 60 * 1000
  const today = new Date();
  const yesterday = new Date(today - DAY_IN_MS);
  const seconds = Math.round((today - date) / 1000);
  const minutes = Math.round(seconds / 60);
  const isToday = today.toDateString() === date.toDateString();
  const isYesterday = yesterday.toDateString() === date.toDateString();
  const isThisYear = today.getFullYear() === date.getFullYear();


  if (seconds < 5) {
    return 'now';
  } else if (seconds < 60) {
    return `${ seconds } sec ago`;
  } else if (seconds < 90) {
    return 'about a min ago';
  } else if (minutes < 60) {
    return `${ minutes } min ago`;
  } else if (isToday) {
    return getFormattedDate(date, 'Today'); // Today at 10:20
  } else if (isYesterday) {
    return getFormattedDate(date, 'Yesterday'); // Yesterday at 10:20
  } else if (isThisYear) {
    return getFormattedDate(date, false, true); // 10. January at 10:20
  }

  return getFormattedDate(date); // 10. January 2017. at 10:20
}
</script>  
</body>
</html>