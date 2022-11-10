<div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
          <div id="remove-scroll " class="chat_design_h" style="height: 818px;">
            <ul class="sidemenu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="    margin-top: 10px;">
              <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                  <span></span>
                </div>
              </li>
               @if(isset(Auth::user()->name))
           <!--    <li class="sidebar-user-panel">
                <div class="user-panel">
                  <div class="row">
                    <div class="sidebar-userpic">
                     <img src="{{asset('public/userimages/'.Auth::user()->image)}}" class="img-responsive" alt="">
                     </div>
                  </div>
                  <div class="profile-usertitle">
                    <div class="sidebar-userpic-name"> {{Auth::user()->name}}  </div>
                   
                  </div>
               
                </div>
              </li> -->
              @endif
           <!--    <li class="menu-heading nav-item start active">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span>Dashboard</span>
              </li>  -->
              <li class="nav-item start active">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link nav-toggle">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                  <span class="title">Dashboard</span>
                  <span class="selected"></span>
                </a>
              </li>
              <li class="nav-item start">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link nav-toggle">
                <i class="fa fa-home" aria-hidden="true"></i>
                  <span class="title">Home</span>
                  <span class="selected"></span>
                </a>
              </li>
                <li class="nav-item start">
                <a href="manage_agent" class="nav-link nav-toggle">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                  <span class="title">Manage Agent</span>
                  <span class="selected"></span>
                </a>
              </li>
              <li class="nav-item start">
                <a href="customer" class="nav-link nav-toggle">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                  <span class="title">Manage Customer</span>
                  <span class="selected"></span>
                </a>
              </li>
              <!-- <li class="nav-item start">
                <a href="analytics" class="nav-link nav-toggle">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                  <span class="title">Manage Report</span>
                  <span class="selected"></span>
                </a>
              </li> -->
           <!--<li class="nav-item start">
                <a href="tasks" class="nav-link nav-toggle">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                  <span class="title">Task</span>
                  <span class="selected"></span>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="#" class="nav-link nav-toggle">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                  <span class="title">Settings</span>
                  <span class="arrow"></span>
               
                </a>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <a href="{{ url('/admin/chat_page') }}" class="nav-link ">
                      <span class="title">Chat Page</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin/account') }}" class="nav-link ">
                      <span class="title">Account</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin/appearance') }}" class="nav-link ">
                      <span class="title">Appearance</span>
                    </a>
                  </li>
                </ul>
              </li>
             
            </ul>
          </div>
        </div>
      </div>

        <script>
        //  alert('dsds');
      //$(document).ready(function(){
                  
          var width=$(window).width();
          var height=$(window).height();

         
           $(".chat_design_h").css({"height": height-80});          
         
      //});
    </script>