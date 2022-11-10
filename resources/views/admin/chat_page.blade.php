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


  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{asset('css/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
  <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="{{asset('css/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Material Design Lite CSS -->
  <link rel="stylesheet" href="{{asset('css/assets/plugins/material/material.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/assets/css/material_style.css')}}">
  <!-- animation -->
  <link href="{{asset('css/assets/css/pages/animate_page.css')}}" rel="stylesheet">
  <!-- dropzone -->
  <link href="{{asset('css/assets/plugins/dropzone/dropzone.css')}}" rel="stylesheet" media="screen">
  <!-- Template Styles -->
    <link href="{{asset('css/assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
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
                  <header>Appearance</header>                                
                </div>
                <div class="card-body ">
                   <form action="{{url('/admin/companydetail')}}" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    @foreach ($User as $Users)
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          
                          <div class="row">
                            <label class="control-label col-md-4" style="text-align: right;">Company Logo</label>
                            <div class="col-lg-6">
                              <!-- <form id="id_dropzone" class="dropzone"> -->
                                <div class="dz-message m-0">
                                  <div class="dropIcon">
                                    <i class="material-icons">cloud_upload</i>
                                  </div>
                                  <p class="m-0">Drop files here or click to upload.</p>
                                  
                                </div>
                              <!-- </form> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                  
                    <div class="form-body">
                     <!--  <div class="form-group row">
                        <label class="control-label col-md-2">Company Logo </label>
                        <div class="col-md-3">
                         <form id="id_dropzone" class="dropzone dz-clickable">
                            <div class="dz-message">
                              <div class="dropIcon">
                                <i class="material-icons">cloud_upload</i>
                              </div>
                              <h3>Drop files here or click to upload.</h3>
                              <em>(This is just a demo. Selected files are <strong>not</strong>
                                actually uploaded.)
                              </em>
                            </div>
                          </form>                        
                          
                        </div>
                      </div> -->
                <!--       <div class="form-group row">
                      <div class="col-lg-12 p-t-20">
                    <label class="control-label col-md-3">Upload Room Photos</label>
                    <form id="id_dropzone" class="dropzone dz-clickable">
                      <div class="dz-message">
                        <div class="dropIcon">
                          <i class="material-icons">cloud_upload</i>
                        </div>
                        <h3>Drop files here or click to upload.</h3>
                        <em>(This is just a demo. Selected files are <strong>not</strong>
                          actually uploaded.)
                        </em>
                      </div>
                    </form>
                  </div>
                </div> -->
                      
                    
                      <?php 
                      //$id=Auth::user()->id;
                      //$userdet = DB::connection('mysql2')->table('company_registration')->where('id','=', '1')->get();
                      
                      //print_r($userdet);die;
               //$email=$userdets->user_email; 
              //$company_detail = UserDB::connection('mysql2')->table("company_registration")->where('company_email', $email)->get();
               //echo $company_detail;die;

                      ?>
                         
                      <div class="form-group row">
                        <label class="control-label col-md-2">Company Name</label>
                        <div class="col-md-3">
                    <input type="text" name="company_name" value="{{$Users->company_name}}" data-required="1" class="form-control"> </div>
                      </div>
                     
                      
                      <div class="form-group row">
                        <label class="control-label col-md-2">Header </label>
                        <div class="col-md-3">
                          <textarea class="form-control" name="header" rows="3" placeholder="Header ...">{{$Users->header}}</textarea>
                    
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-2">Welcome Message </label>
                        <div class="col-md-3">
                           <textarea class="form-control" name="welmsg" rows="3" placeholder="Welcome Message ...">{{$Users->wel_msg}}</textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-2">Chat Page URL </label>
                        <div class="col-md-3">
                          <input name="chatpageurl" type="text" value="{{$Users->chat_page_url}}" placeholder="Welcome to www.vert-age.com" class="form-control" >
                        </div>
                      </div>

                      <!-- <div class="form-group row">
                        <label class="control-label col-md-2">Region </label>
                        <div class="col-md-3">
                          <select class="form-control" name="Region">
                            <option value="">Select...</option>
                            <option value="India">India </option>
                            <option value="US">US </option>
                            <option value="China">China</option>
                            <option value="Australia">Australia </option>
                          </select>
                        </div>
                      </div> -->
                    </div>
                        
                        <div class="form-group pb-3">
                          <div class="col-md-5">
                          <div id="accordion">
                            
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                               Search Engine Optimization 
                              </a>
                              </div>
                              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                     <div class="form-group row">
                                      <label class="control-label col-md-4">Meta title</label>
                                      <div class="col-md-8">
                                        <input name="metatitle" type="text" value="{{$Users->meta_title}}" class="form-control">
                                      </div>
                                    </div>
                                       <div class="form-group row">
                                      <label class="control-label col-md-4">Meta description </label>
                                      <div class="col-md-8">
                                        <input name="metadesc" type="text" value="{{$Users->meta_desc}}" class="form-control">
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>
                         </div>
                     @endforeach
                    <div class="form-group">
                      <div class="offset-md-2 col-md-2">
                        <button type="submit" class="btn btn-info">Update</button>
                      </div>
                    </div>

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
  






 
 
  <!-- start js include path -->
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
  <!-- dropzone -->
  <script src="{{asset('css/assets/plugins/dropzone/dropzone.js')}}"></script>
  <script src="{{asset('css/assets/plugins/dropzone/dropzone-call.js')}}"></script>
  <!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/file_upload.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 11:01:13 GMT -->
</html>