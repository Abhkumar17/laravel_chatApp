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
<!--   <link href="//cdn.muicss.com/mui-0.10.3/css/mui.min.css" rel="stylesheet" type="text/css" />
  <script src="//cdn.muicss.com/mui-0.10.3/js/mui.min.js"></script> -->
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
                    
                    <div class="container-fluid bg-gray" id="accordion-style-1">

                        
    
        <div class="row">
        	 <div class="col-sm-12 col-md-12 col-xl-12">               
              <div id="accordion" role="tablist">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Widget Settings
                        </a>
                      </h5>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
        <div class="">
            <div class="col-lg-4">
                <div class="row">
            <div class="col-md-5">
            <label for="sort">Chat Visibility</label>
          </div>                   
          <div class="col-md-7">
            <div class="form-group">
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <select id="operatorDataSettings" name="agentid" class="form-control">
                        <option value="">Select</option>
                  <option value="982768">adam</option>
                  <option value="141819">sunil rathore</option>
                </select>
              </div>
            </div>
          </div> 
        </div>
                <div class="row">
                    <div class="col-md-5">
            <label for="sort">Display the Chat When You're Offline</label>
          </div>                   
          <div class="col-md-7">
            <form action="#">
                <div class="switch">
                    <input id="switch-1" type="checkbox" class="switch-input" />
                    <label for="switch-1" class="switch-label">Switch</label>
                </div>
            </form>
              </div> 
        </div>
        <div class="row">
                    <div class="col-md-5">
            <label for="sort">Offline Status</label>
          </div>                   
          <div class="col-md-7">
            <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
              </div> 
        </div>
        <div class="row mt-2">
                    <div class="col-md-5">
            <label for="sort">Offline Message</label>
          </div>                   
          <div class="col-md-7">
            <textarea class="form-control" rows="3" placeholder="Welcome Message ..."></textarea>      
              </div> 
        </div>
        <div class="row mt-1">
                    <div class="col-md-5">
            <label for="sort">Button Label</label>
          </div>                   
          <div class="col-md-7">
            <form action="#">
                <div class="switch">
                    <input id="switch-2" type="checkbox" class="switch-input" />
                    <label for="switch-2" class="switch-label">Switch</label>
                </div>
            </form>
              </div> 
        </div>
        <div class="row">
                    <div class="col-md-5">
            <label for="sort">Label Text</label>
          </div>                   
          <div class="col-md-7">
            <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
              </div> 
        </div>
        <div class="row mt-1">
                    <div class="col-md-5">
            <label for="sort">Enable widget sounds</label>
          </div>                   
          <div class="col-md-7">
            <form action="#">
                <div class="switch">
                    <input id="switch-3" type="checkbox" class="switch-input" />
                    <label for="switch-3" class="switch-label">Switch</label>
                </div>
            </form>
              </div> 
        </div>


                </div>
            </div> 
        </div>
                </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Get Started
                        </a>
                      </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-5">
            <label for="sort">Status</label>
          </div>                   
          <div class="col-md-7">
            <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
              </div> 
        </div>
        <div class="row mt-2">
                    <div class="col-md-5">
            <label for="sort">Message</label>
          </div>                   
          <div class="col-md-7">
            <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
              </div> 
        </div>
        <div class="row mt-1">
                    <div class="col-md-5">
            <label for="sort">Background</label>
          </div>                   
          <div class="col-md-7">
            <form action="#">
                <div class="switch">
                    <input id="switch-4" type="checkbox" class="switch-input" />
                    <label for="switch-4" class="switch-label">Switch</label>
                </div>
            </form>
              </div> 
        </div>
            </div>
        </div>
                </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingThree">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         Mobile Widget
                        </a>
                      </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                         <div class="col-lg-6">
                            <div class="row mt-2">
                              <div class="col-md-12">
                                  <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Left</a>
                                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Right</a>
                                      
                                    </div>
                                  </nav>
                                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim.
                                    </div>
                                   
                                  </div>
                             
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                </div>

                 <div class="card">
                    <div class="card-header" role="tab" id="headingThree4">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                           Pre-chat Survey
                        </a>
                      </h5>
                </div>
                <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordion">
                       <div class="card-body">
          <div class="col-lg-4">
                <div class="row mt-1">
                    <div class="col-md-3">
                    <label for="sort">Display</label>
                  </div>                   
                  <div class="col-md-9">
                    <form action="#">
                        <div class="switch">
                            <input id="switch-5" type="checkbox" class="switch-input" />
                            <label for="switch-5" class="switch-label">Switch</label>
                        </div>
                    </form>
                      </div> 
                </div>
                <div class="row mt-1">
                            <div class="col-md-3">
                    <label for="sort">Message</label>
                  </div>                   
                  <div class="col-md-9">
                    <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
                      </div> 
                </div>
                <div class="row mt-2">
                            <div class="col-md-3">
                    <label for="sort">Email</label>
                  </div>                   
                  <div class="col-md-9">
                    <input type="text" name="startdate" class="form-control hasDatepicker" id="datepicker-1" placeholder="">             
                      </div> 
                </div>
                <div class="row mt-2">
                    <div class="col-md-3">
                      <label for="sort">Select</label>
                    </div>                   
                    <div class="col-md-6">
                      <select class="form-control" name="Region">
                        <option value="">Select...</option>
                        <option value="India">India </option>
                        <option value="US">US </option>
                        <option value="China">China</option>
                        <option value="Australia">Australia </option>
                      </select>            
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="#" class="edit btn btn-info" id="app_add">Add</a>            
                    </div> 
                </div>
          </div>
      </div>
                </div>
                </div>

                <div class="card">
                    <div class="card-header" role="tab" id="headingThree41">
                      <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree41" aria-expanded="false" aria-controls="collapseThree41">
                          Multilanguage
                        </a>
                      </h5>
                </div>
                <div id="collapseThree41" class="collapse" role="tabpanel" aria-labelledby="headingThree41" data-parent="#accordion">
                      <div class="card-body">
                       <div class="col-lg-4">
                            <div class="row mt-2">
                              <div class="col-md-3">
                                <label for="sort">Select</label>
                              </div>                   
                              <div class="col-md-6">
                                <select class="form-control" name="Region">
                                  <option value="">Select...</option>
                                  <option value="India">India </option>
                                  <option value="US">US </option>
                                  <option value="China">China</option>
                                  <option value="Australia">Australia </option>
                                </select>            
                              </div>
                              <div class="col-md-3 text-center">
                                  <a href="#" class="edit btn btn-info" id="app_add">Add</a>            
                              </div> 
                            </div>
                       </div>
                      </div>
                </div>
                </div>



              </div>



           </div>
        </div>
</div>
     <div class="row">
              <div class="col-lg-12 text-center mt-4">
                    <a href="#" class="edit btn btn-info" id="app_save">Save</a>
              </div>             
           </div>

</div>
<!-- .// Accordion -->




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