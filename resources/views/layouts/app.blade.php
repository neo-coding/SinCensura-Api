<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title> {{env('APP_NAME')}} </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    @yield('css')
</head>

<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand float-left" href="index.html">
                    <h4><img src="{{asset('img/logo1.ico')}}" class="admin_img" alt="logo">SIN CENSURA</h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">
                    <div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{asset('img/admin.jpg')}}" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>{{Auth::user()->name}}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">-</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>Account Settings</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i>User Status</a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>Inbox</a>
                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>Lock Screen</a>
                                <a class="dropdown-item" href=" {{route('logout')}} "><i class="fa fa-sign-out"></i>Log Out</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                     src="{{asset('img/admin.jpg')}}">
                                <p class="user-info menu_hide">Welcome {{Auth::user()->name}} </p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">
                    <li>
                        <a href=" {{route('inicio')}} ">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('bonos')}}">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Bonos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('eventos')}}">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contacto')}}">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;Contactos</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                   <div class="row no-gutters">
                       <div class="col-12 col-lg-6 col-sm-4">
                           <h4 class="nav_top_align">
                               Blank Page
                           </h4>
                       </div>
                   </div>
                </div>
            </header>
            <div class="outer">
                @yield('outer')
            </div>
            <!-- Modal -->
            <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <form>
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="float-right" aria-hidden="true">&times;</span>
                            </button>
                            <div class="input-group search_bar_small">
                                <input type="text" class="form-control" placeholder="Search..." name="search">
                                <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.outer -->
        </div>
    </div>
    <!-- /#content -->
    <div id="request_list">
        <div class="request_scrollable">
            <ul class="nav nav-tabs m-t-15">
                <li class="nav-item">
                    <a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <div id="settings_section">
                        <div class="layout_styles mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4>Layout settings</h4>
                                </div>
                            </div>
                            <form autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Header</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_nav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Menu</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_menunav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">No Breadcrumb</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_breadcrumb">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox"
                                                       data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4 class="setting_title">General Settings</h4>
                                </div>
                            </div>
                            <div class="data m-t-5">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
                                    <div class="col-7">
                                        <span class="chat_name">Notifications</span><br/>
                                        Get new notifications
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-info">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Messages</span><br/>
                                        Get new messages
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-danger">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Warnings</span><br/>
                                        Get new warnings
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-warning">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Events</span><br/>
                                        Show new events
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-primary">
                                            <input type="checkbox" value="" >
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourites">
                    <div id="requests" class="mx-3">
                        <div class="m-t-35">
                            <h4 class="setting_title">Favorites</h4>
                        </div>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/images1.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1"></div>
                                <div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/8.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Nancy T. Strozier</span><br/>
                                    Away
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/3.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Robbinson</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="setting_title">Contacts</h4>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/7.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Chester Hardesty</span><br/>
                                    Busy
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/2.jpg')}}" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Peter</span><br/>
                                    Online
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/6.jpg')}}" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Devin Hartsell</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/4.jpg')}}" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Kimy Zorda</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/mailbox_imgs/5.jpg')}}" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Jessica Bell</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#content -->
</div>
<!-- /#wrap -->

<!-- global scripts-->
<script type="text/javascript" src="{{asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- end of global scripts-->
@yield('js')
</body>
</html>