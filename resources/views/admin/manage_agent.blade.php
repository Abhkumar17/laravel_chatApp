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
                <div class="col-md-12">
                    <div class="card card-topline-aqua">
                        <div class="card-head">
                           <div class=""> <header>Manage Agent</header></div>
                            <div class="float-right">
                               <div class="pr-2" ><a href="#" class="edit btn btn-info" id="add_data">Add Agent</a></div> 
                            </div>
                        </div>
                          <div class="row">
                                <div class="col-md-12">
                                   <div class="alert alert-success d-none" id="msg_div">
                                           <span id="res_message"></span>
                                   </div>
                                </div>
                         </div>
                        <div class="card-body">
                          <table class="table table-bordered display full-width dataTable no-footer" id="laravel_datatable" role="grid" style="width:100%">
                             <thead>
                                <tr>
                                   <th>Sr.No</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Mobile No.</th>
                                   <th>Image</th>
                                   <th>Type</th>
                                   <th>Action</th>
                                </tr>
                             </thead>
                          </table>
                        </div>
                    </div>
                </div>
            </div> 
         


      
              
          <!-- start widget -->




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
 

<div id="agentModal" class="modal fade" role="dialog">
    <div class="modal-dialog model">
        <div class="modal-content">
  <form method="post" id="agent_form" enctype="multipart/form-data" action="javascript:void(0)">
                <div class="modal-header">
                  <h4 class="modal-title">Add Agent</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   
                </div>
                
                <div class="modal-body">
                   {{ csrf_field() }}
                    <span id="form_output"></span>
                    <span id="form_output"> <span style="float:right;"> Allow License Agent : 40</span></span>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required"/>
                    </div>
                    <div class="form-group pass">
                        <label>Password</label>
                        <input type="Password" name="password" id="password" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Mobile No</label>
                        <input type="text" name="mobileno" id="mobileno" class="form-control" required="required"/>
                    </div>
                    <div class="form-group" >
                        <label>Image</label>
                        <input type="file" name="image" id="image" class="form-control" />
                        <input type="hidden" name="old_img" id="old_img">
                    </div>
                    <div class="addagent_mode_hide">
                    <div class="form-group" >
                        
                        <p id="img_agent"></p>
                    </div>
                    
                    <div class="form-group">
                        <label>IP Address</label>
                        
                        <input type="text" name="ip_address" id="ip_address" class="form-control" readonly="true" />
                    </div>
                    <div class="form-group">
                        <label>State Code</label>
                        <input type="text" name="regioncode" id="regioncode" class="form-control" readonly="true" />
                    </div>

                    <div class="form-group">
                        <label>State</label>
                        <input type="text" name="regionname" id="regionname" class="form-control" readonly="true" />
                    </div>

                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" name="zipcode" id="zipcode" class="form-control" readonly="true" />
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" id="city" class="form-control" readonly="true" />
                    </div>

                     <div class="form-group">
                        <label>Country</label>
                        <input type="text" name="country" id="country" class="form-control" readonly="true" />
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="agentid" id="agentid" class="form-control"  />
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
<script type="text/javascript">
$(document).ready( function () {
    var file_path="{{asset('public/userimages/')}}";
    var nofile_path="{{asset('public/userimages/noimage.jpg')}}";
    var dt = $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('/admin/manage_agent/getagentlist') }}",
           columns: [
                    { data: 'id', name: '' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'mobileno', name: 'mobileno' },
                    { 
                      "render": function (data, type, JsonResultRow, meta) {
                        if(JsonResultRow.image==null){
                            return '<img src="'+nofile_path+'" width="80">';
                        }else{
                            return '<img src="'+file_path+'/'+JsonResultRow.image+'" width="80">';
                          }
                        } 
                    },
                    { data: 'type', name: 'type' },
                    { data: 'action', name: 'id', orderable: false, searchable: false}
                    ],
            "createdRow": function (row, data, index) {
              var info = dt.page.info();
              $('td', row).eq(0).html(index + 1 + info.page * info.length);
          },
        });
     });
$('#add_data').click(function(){
        $('#agentModal').modal('show');
        $('#agent_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
        $('.modal-title').text('Add Agent');
        $('.pass').show();
        $('.img_hide').show();
        $('.addagent_mode_hide').hide();
    });

$('#agent_form').on('submit', function(event){
        event.preventDefault();
       var formData = new FormData(this);
        $.ajax({
            url:"{{ url('/admin/addagent/postdata') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData:false,
            dataType:"json",
            success:function(data)
            {
                
                    $('#form_output').html(data.success);
                    $('#agent_form')[0].reset();
                    $('#action').val('Add');
                    $('.modal-title').text('Add Data');
                    $('#button_action').val('insert');
                    $('#agentModal').modal('hide');
                    $('#laravel_datatable').DataTable().ajax.reload();
                    $('#res_message').html(data.success);
                    $('#msg_div').removeClass('d-none');
 
            
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
            },10000);
          }
        })
    });

$(document).on('click', '.editagent', function(){
        $("#password").removeAttr("required");
        $("#image").removeAttr("required");
        var id = $(this).attr("id");
        //alert(id);
        $('#form_output').html('');
        $.ajax({
            url:"{{url('/admin/manage_agent/fetchdata')}}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
         file='';     
      var file_path="{{asset('public/userimages/')}}";
      var nofile_path="{{asset('public/userimages/noimage.jpg')}}";
      file=data.image;
      //alert(file);
         if(file == null)
         {
         agentimages ='<img src="'+nofile_path+'" class="img" width="80">';
         }else{
         agentimages ='<img src="'+file_path+'/'+file+'" class="img" width="80">';
         } 

                $('#agentid').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#mobileno').val(data.mobileno);
                $('.pass').hide();
                $('.img_hide').hide();
                $('#img_agent').show();
                $('#old_img').val(data.image);
                $('#img_agent').html(agentimages);
                $('#ip_address').val(data.ip_address);
                $('#regioncode').val(data.regioncode);
                $('.addagent_mode_hide').show();
                $('#regionname').val(data.regionname);
                $('#zipcode').val(data.zipcode);
                //$('#areacode').val(data.areacode);
                $('#city').val(data.city);
                $('#country').val(data.country);
                
                $('#agentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
                
                //$('#res_message').html(data.success);
                //$('#msg_div').removeClass('d-none');
            $('#laravel_datatable').DataTable().ajax.reload();
 
            //document.getElementById("agent_form").reset();
            //setTimeout(function(){
            //$('#agentModal').modal('hide');
            //$('#res_message').hide();
            //$('#msg_div').hide();
            //},10000);
            }
        })
   });

$(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        //alert(id);
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{url('/admin/delagent')}}",
                mehtod:"get",
                data:{id:id},
                success:function(data)
                {
                    //alert(data);
                    $('#laravel_datatable').DataTable().ajax.reload();
                }
            })
        }
        else
        {
            return false;
        }
    });
 
  </script>

  </script>

</body>
</html>