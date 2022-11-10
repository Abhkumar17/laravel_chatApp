<div class="page-header navbar navbar-fixed-top">
      <div class="page-header-inner ">
        <!-- logo start -->
        <center><div class="page-logo main-header">
       <!--    <a href="{{ url('/admin/dashboard') }}">
             <img alt="" src="{{asset('css/assets/img/logo.png')}}"> 

         
            <img alt="logo" class="logo-default" src="{{asset('css/assets/img/logow.png')}}"> </a> -->

          <a class="logo" href="{{ url('/admin/dashboard') }}">
           <!--  <span class="logo-mini" style="color:white; padding: 3px;"><b>L</b>C</span> -->
            <span class="logo-mini"><img alt="" src="{{asset('css/assets/img/short_LC1.png')}}" style="    position: relative; top: -2px; left: 2px;}"> </span>
            <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img alt="logo" class="logo-default" src="{{asset('css/assets/img/logow.png')}}"> </a></span>
          </a>


        </div></center>
        <!-- logo end -->
        <ul class="nav navbar-nav navbar-left in">
          <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
        </ul>
       
        <!-- start mobile menu -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
          data-target=".navbar-collapse">
          <span></span>
        </a>
        <!-- end mobile menu -->
        <!-- start header menu -->
        <div class="top-menu">
          <ul class="nav navbar-nav pull-right">
                 
            <!-- start manage user dropdown -->
            <li class="dropdown dropdown-user">
              @if(isset(Auth::user()->name))
              <?php 
              // $ss=Auth::user()->image;
              
              ?>
             
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span class="username username-hide-on-mobile"> welcome: {{Auth::user()->name}} </span>
                <i class="fa fa-angle-down"></i>
              </a>

              @endif
              <ul class="dropdown-menu dropdown-menu-default animated jello">
                <!--<li>
                  <a href="user_profile.html">
                    <i class="icon-user"></i> Profile </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-settings"></i> Settings
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-directions"></i> Help
                  </a>
                </li>
                <li class="divider"> </li>
                <li>
                  <a href="lock_screen.html">
                    <i class="icon-lock"></i> Lock
                  </a>
                </li>-->
                <li>
                  <a href="{{ url('/admin/logout')}}">
                    <i class="icon-logout"></i> Log Out </a>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>