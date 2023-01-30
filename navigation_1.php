<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ganana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ navigation menu ] start -->


  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
      <div class="navbar-content scroll-div " >

        <div class="">
          <div class="main-menu-header">
            <!-- <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image"> -->
            <div class="user-details">
              <span>Sudheer</span>
              <div id="more-details">Software Developer<i class="fa fa-chevron-down m-l-5"></i></div>
            </div>
          </div>
          <div class="collapse" id="nav-user-link">
            <ul class="list-unstyled">
              <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
              <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
              <li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
            </ul>
          </div>
        </div>

        <ul class="nav pcoded-inner-navbar ">
          <li class="nav-item pcoded-menu-caption">
            <label>Navigation</label>
          </li>
          <li class="nav-item">
              <a href="http://localhost:8000/" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
          </li>
          <li class="nav-item"><a href="/users" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Users</span></a></li>

          <li class="nav-item pcoded-menu-caption">
            <label>Utilities</label>
          </li>
          <li class="nav-item"><a href="/settings" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Settings</span></a></li>

          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Admin</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="#" target="_blank">View Account</a></li>
                  <li><a href="#" target="_blank">Update Account</a></li>
                  <li><a href="logout/" target="_blank">Logout</a></li>
              </ul>
          </li>

<!--          <li class="nav-item pcoded-menu-caption">-->
<!--            <label>App's Info</label>-->
<!--          </li>-->

          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">App's Info</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="/application_install" target="_blank">Application Installer</a></li>
                  <li><a href="/application_uninstall" target="_blank">Application Uninstaller</a></li>
                  <li><a href="/application_backup" target="_blank">Application Backup</a></li>
              </ul>
          </li>
          <li class="nav-item pcoded-menu-caption">
            <label>Apps</label>
          </li>
                    <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">GCM</span></a>


          </li>
                    <li class="nav-item pcoded-hasmenu">

                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Slurm</span></a>

          </li>

          <li class="nav-item pcoded-menu-caption">
            <label>Tools &amp; Help</label>
          </li>
          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class='fas fa-tools'></i></span><span class="pcoded-mtext">Tools</span></a>
              <ul class="pcoded-submenu">
                 <li><a href="#" target="_blank">>_SSH Terminal</a></li>
                  <li><a href="#" target="_blank">VNC Terminal</a></li>
                  <li><a href="/session_log" target="_blank">Sessions Logs</a></li>
                  <li><a href="/system_log_viewer" target="_blank">System Log Viewer</a></li>
              </ul>
          </li>
          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="fa fa-question-circle"></i></span><span class="pcoded-mtext">Help</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="#" target="_blank">Ganana HPC Suite Help</a></li>
                  <li><a href="/about" target="_blank">About</a></li>
              </ul>
          </li>
          </ul>
        <footer class="footer py-2" >
                <p style="color:#fff; position: fixed; bottom: 0; width: 100%; height: 60px;">© 2022 Locuz. All rights reserved</p>
        </footer>
      </div>
    </div>
  </nav>
  <!-- [ navigation menu ] end -->
  <!-- [ Header ] start -->
  <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <div class="m-header">
          <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
          <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="<?php echo $baseUrl.'/img/brand_logo.png';?>" alt="<?php echo CHtml::encode(Yii::app()->name);?>" alt="" class="logo" style="width: 139px;">
            <img src="/assets/images/logo-icon.png" alt="" class="logo-thumb">
          </a>
          <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
              <div class="search-bar">
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                <button type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </li>
            <li class="nav-item">
              Home
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                  Apps
                </a>
                <div class="dropdown-menu profile-notification ">
                  <ul class="pro-body">
                    <li><a href="/application_install" class="dropdown-item"><i class="fas fa-circle"></i> App Install</a></li>
                    <li><a href="/application_uninstall" class="dropdown-item"><i class="fas fa-circle"></i>App Uninstall</a></li>
                    <li><a href="/application_backup" class="dropdown-item"><i class="fas fa-circle"></i> App Backup</a></li>
                  </ul>
                </div>
              </div>
            </li>
                        <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                  Tools
                </a>
                <div class="dropdown-menu profile-notification ">
                  <ul class="pro-body">
                    <li><a href="#" class="dropdown-item"><i class="fas fa-circle"></i>>_SSH Terminal</a></li>
                    <li><a href="#" class="dropdown-item"><i class="fas fa-circle"></i> VNC Terminal</a></li>
                    <li><a href="/session_log" class="dropdown-item"><i class="fas fa-circle"></i>Sessions Logs</a></li>
                    <li><a href="/system_log_viewer" class="dropdown-item"><i class="fas fa-circle"></i>System Log Viewer</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                  Help
                </a>
                <div class="dropdown-menu profile-notification ">
                  <ul class="pro-body">
                    <li><a href="#" class="dropdown-item"><i class="fas fa-circle"></i>App Ganana HPC Suite Help</a></li>
                    <li><a href="/about" class="dropdown-item"><i class="fas fa-circle"></i> About</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                  Admin
                </a>
                <div class="dropdown-menu profile-notification ">
                  <ul class="pro-body">
                    <li><a href="view_account.html" class="dropdown-item"><i class="fas fa-circle"></i> View Account</a></li>
                    <li><a href="#" class="dropdown-item"><i class="fas fa-circle"></i>App Update Account</a></li>
                    <li><a href="#" class="dropdown-item"><i class="fas fa-circle"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <div class="dropdown mega-menu">
                <!-- <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                  Mega
                </a> -->
                <div class="dropdown-menu profile-notification ">
                  <div class="row no-gutters">
                    <div class="col">
                      <h6 class="mega-title">UI Element</h6>
                      <ul class="pro-body">
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alert</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Cards</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li>
                      </ul>
                    </div>
                    <div class="col">
                      <h6 class="mega-title">Forms</h6>
                      <ul class="pro-body">
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Elements</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Validation</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Masking</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Wizard</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Picker</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Select</a></li>
                      </ul>
                    </div>
                    <div class="col">
                      <h6 class="mega-title">Application</h6>
                      <ul class="pro-body">
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-check-square"></i> To-Do</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-image"></i> Gallery</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-help-circle"></i> Helpdesk</a></li>
                      </ul>
                    </div>
                    <div class="col">
                      <h6 class="mega-title">Extension</h6>
                      <ul class="pro-body">
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Editor</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Invoice</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-calendar"></i> Full calendar</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
                        <li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li>
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                  <i class="icon feather icon-bell"></i>
                  <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notification">
                  <div class="noti-head">
                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                    <div class="float-right">
                      <a href="#!" class="m-r-10">mark as read</a>
                      <a href="#!">clear all</a>
                    </div>
                  </div>
                  <ul class="noti-body">
                    <li class="n-title">
                      <p class="m-b-0">NEW</p>
                    </li>
                    <li class="notification">
                      <div class="media">
                        <img class="img-radius" src="/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                          <p>New ticket Added</p>
                        </div>
                      </div>
                    </li>
                    <li class="n-title">
                      <p class="m-b-0">EARLIER</p>
                    </li>
                    <li class="notification">
                      <div class="media">
                        <img class="img-radius" src="/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                          <p>Prchace New Theme and make payment</p>
                        </div>
                      </div>
                    </li>
                    <li class="notification">
                      <div class="media">
                        <img class="img-radius" src="/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                          <p>currently login</p>
                        </div>
                      </div>
                    </li>
                    <li class="notification">
                      <div class="media">
                        <img class="img-radius" src="/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                          <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                          <p>Prchace New Theme and make payment</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="noti-footer">
                    <a href="#!">show all</a>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="feather icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                  <div class="pro-head">
                    <img src="/assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                    <span>John Doe</span>
                    <a href="login/" class="dud-logout" title="Logout">
                      <i class="feather icon-log-out"></i>
                    </a>
                  </div>
                  <ul class="pro-body">
                    <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                    <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                    <li><a href="login/" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>


  </header>
  <!-- [ Header ] end -->
</body>

</html>
