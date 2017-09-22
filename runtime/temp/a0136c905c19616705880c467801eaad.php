<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"/www/wwwroot/blog.gcan.top/public/../application/index/view/index/single_page.html";i:1506052106;s:78:"/www/wwwroot/blog.gcan.top/public/../application/index/view/Public/header.html";i:1505978966;s:82:"/www/wwwroot/blog.gcan.top/public/../application/index/view/Public/blog_right.html";i:1505493577;s:78:"/www/wwwroot/blog.gcan.top/public/../application/index/view/Public/footer.html";i:1505896522;}*/ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />

    <title><?php echo $article['title']; ?></title>
    <meta name="keywords" content="高万耀,阿耀王子,PHP开发,COCOS开发,区块链,网站开发,nodejs,gcan"/>
    <meta name="description" content="写写博客，记录生活的点点滴滴" />
    <meta name="author" content="高万耀" />




    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
    <link href="__STATIC__/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="__STATIC__/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="__STATIC__/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="__STATIC__/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="__STATIC__/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="__STATIC__/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="__STATIC__/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo '__STATIC__/css/prism.css?vv='.rand(1000,9999);?>" rel="stylesheet" type="text/css" />


    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="__STATIC__/gcan.ico" />



</head>
<!-- END HEAD -->

<body class="page-container-bg-solid">
<div class="page-wrapper">

    <!-- BEGIN HEADER -->
    
<style>


    html,body,div,p,a,ul,li,table,td,pre{
        font-family:Arial,Verdana,Sans-serif,"微软雅黑" !important;
    }

    ::selection {
        background:#e96147;
        color:red;
    }

    ::-moz-selection {
        background:#e96147;
        color:red;
    }

    ::-webkit-selection {
        background:#e96147;
        color:red;
    }

 

</style>

<div class="page-wrapper-row">
    <div class="page-wrapper-top">
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="/">
                            <img style="width: 160px;height:50px;margin-top: 10px;" src="__STATIC__/img/logo.png" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li style="display:none;" class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default">7</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <strong>12 pending</strong> tasks</h3>
                                        <a href="javascript:;">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-success">
                                                                            <i class="fa fa-plus"></i>
                                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-danger">
                                                                            <i class="fa fa-bolt"></i>
                                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-warning">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-danger">
                                                                            <i class="fa fa-bolt"></i>
                                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-danger">
                                                                            <i class="fa fa-bolt"></i>
                                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-warning">
                                                                            <i class="fa fa-bell-o"></i>
                                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-info">
                                                                            <i class="fa fa-bullhorn"></i>
                                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                                        <span class="label label-sm label-icon label-danger">
                                                                            <i class="fa fa-bolt"></i>
                                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <li  style="display:none;" class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-calendar"></i>
                                    <span class="badge badge-default">3</span>
                                </a>
                                <ul class="dropdown-menu extended tasks">
                                    <li class="external">
                                        <h3>You have
                                            <strong>12 pending</strong> tasks</h3>
                                        <a href="javascript:;">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">New release v1.2 </span>
                                                                        <span class="percent">30%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">40% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">Application deployment</span>
                                                                        <span class="percent">65%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">65% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">Mobile app release</span>
                                                                        <span class="percent">98%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">98% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">Database migration</span>
                                                                        <span class="percent">10%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">10% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">Web server upgrade</span>
                                                                        <span class="percent">58%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">58% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">Mobile development</span>
                                                                        <span class="percent">85%</span>
                                                                    </span>
                                                    <span class="progress">
                                                                        <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">85% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                                    <span class="task">
                                                                        <span class="desc">New UI release</span>
                                                                        <span class="percent">38%</span>
                                                                    </span>
                                                    <span class="progress progress-striped">
                                                                        <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                                            <span class="sr-only">38% Complete</span>
                                                                        </span>
                                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!--<li class="droddown dropdown-separator">-->
                            <!--<span class="separator"></span>-->
                            <!--</li>-->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <li style="<?php if($switch == 'off'){ echo 'display:none'; }else{ echo 'display:none';}?>" class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a   href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="circle">7</span>
                                    <span class="corner"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <strong>7 New</strong> Messages</h3>
                                        <a href="javascript:;">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="__STATIC__/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                                        <span class="from"> Lisa Wong </span>
                                                                        <span class="time">Just Now </span>
                                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="__STATIC__/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                                        <span class="from"> Richard Doe </span>
                                                                        <span class="time">16 mins </span>
                                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="__STATIC__/assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                                        <span class="from"> Bob Nilson </span>
                                                                        <span class="time">2 hrs </span>
                                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="__STATIC__/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                                        <span class="from"> Lisa Wong </span>
                                                                        <span class="time">40 mins </span>
                                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                                    <span class="photo">
                                                                        <img src="__STATIC__/assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                                        <span class="from"> Richard Doe </span>
                                                                        <span class="time">46 mins </span>
                                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li  style="<?php if($switch == 'on'){ echo 'display:none'; }?>" class="dropdown dropdown-extended dropdown-inbox dropdown-dark" >
                                <a href="/signin" class="dropdown-toggle" >
                                    登录
                                </a>

                            </li>
                            <li style="<?php if($switch == 'on'){ echo 'display:none'; }?>" class="dropdown dropdown-extended dropdown-inbox dropdown-dark" >
                                <a href="javascript:;" class="dropdown-toggle" >
                                    /
                                </a>

                            </li>
                            <li style="<?php if($switch == 'on'){ echo 'display:none'; }?>" class="dropdown dropdown-extended dropdown-inbox dropdown-dark" >
                                <a href="/signup" class="dropdown-toggle" >
                                    注册
                                </a>

                            </li>


                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li style="<?php if($switch == 'off'){ echo 'display:none'; }?>" class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <!--<img alt="" class="img-circle" src="__STATIC__/assets/layouts/layout3/img/avatar9.jpg">-->
                                    <img style="max-width:50px;" alt="" class="img-circle" src="__STATIC__/img/kaola.jpg">
                                    <span class="username username-hide-mobile">

                                    <?php echo $account['user_name']; ?>

                                </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <!--<li>-->
                                    <!--<a href="page_user_profile_1.html">-->
                                    <!--<i class="icon-user"></i> My Profile </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--<a href="app_calendar.html">-->
                                    <!--<i class="icon-calendar"></i> My Calendar </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--<a href="app_inbox.html">-->
                                    <!--<i class="icon-envelope-open"></i> My Inbox-->
                                    <!--<span class="badge badge-danger"> 3 </span>-->
                                    <!--</a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--<a href="app_todo_2.html">-->
                                    <!--<i class="icon-rocket"></i> My Tasks-->
                                    <!--<span class="badge badge-success"> 7 </span>-->
                                    <!--</a>-->
                                    <!--</li>-->
                                    <!--<li class="divider"> </li>-->
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-lock"></i> 锁屏
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $access; ?>logout.html">
                                            <i class="icon-key"></i> 退出
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li  style="display:none;" class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="search" method="GET">
                        <div class="input-group">
                            <input style="color: skyblue;" type="text" class="form-control" placeholder="Search"  name="search">
                            <span class="input-group-btn">
                                                <a href="javascript:;" class="btn submit">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="/"> 首页
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left" style="display: none;">
                                    <li class=" ">
                                        <a href="javascript:;" class="nav-link  ">
                                            <i class="icon-bar-chart"></i> Default Dashboard
                                            <span class="badge badge-success">1</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;" class="nav-link  ">
                                            <i class="icon-bulb"></i> Dashboard 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;" class="nav-link  ">
                                            <i class="icon-graph"></i> Dashboard 3
                                            <span class="badge badge-danger">3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;"> laravel
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class="dropdown-submenu ">
                                        <a href="https://d.laravel-china.org/docs/5.4/about" class="nav-link nav-toggle ">
                                            <i class="icon-graph"></i> 中文文档
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu" style="display: none;">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Bootstrap Form
                                                    <br>Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Validation States </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Layouts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Repeater </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Input Mask </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form X-editable </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Wizard </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> iCheck Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Image Cropping </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Multiple File Upload </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Dropzone File Upload </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown " style="display: none;">
                                <a href="javascript:;"> 教程
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left"  style="display: none;">
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-settings"></i> Form Stuff
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Bootstrap Form
                                                    <br>Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Validation States </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Material Design
                                                    <br>Form Validation </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Layouts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Repeater </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Input Mask </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form X-editable </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Form Wizard </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> iCheck Controls </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Image Cropping </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Multiple File Upload </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Dropzone File Upload </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-briefcase"></i> Tables
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Basic Tables </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Responsive Tables </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Bootstrap Tables </a>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle"> Datatables
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Managed Datatables </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Buttons Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Colreorder Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Rowreorder Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Scroller Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> FixedHeader Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Responsive Extension </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Editable Datatables </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link "> Ajax Datatables </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="?p=" class="nav-link nav-toggle ">
                                            <i class="icon-wallet"></i> Portlets
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Boxed Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Light Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Solid Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Ajax Portlets </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Draggable Portlets </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="?p=" class="nav-link nav-toggle ">
                                            <i class="icon-settings"></i> Elements
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Steps </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Lists </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Ribbons </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Overlays </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> User Cards </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu ">
                                        <a href="javascript:;" class="nav-link nav-toggle ">
                                            <i class="icon-bar-chart"></i> Charts
                                            <span class="arrow"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> amChart </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Flot Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Flow Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Google Charts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> eCharts </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;" class="nav-link "> Morris Charts </a>
                                            </li>
                                            <li class="dropdown-submenu ">
                                                <a href="javascript:;" class="nav-link nav-toggle"> HighCharts
                                                    <span class="arrow"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link " target="_blank"> HighCharts </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link " target="_blank"> HighStock </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="javascript:;" class="nav-link " target="_blank"> HighMaps </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a target="_blank" href="baidu.html"> 百度
                                    <span class="arrow"></span>
                                </a>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a target="_blank" href="https://www.npmjs.com/"> npm
                                    <span class="arrow"></span>
                                </a>
                            </li>

                            <li class="menu-dropdown classic-menu-dropdown ">
                                <a target="_blank" href="http://www.phpcomposer.com/"> Composer
                                    <span class="arrow"></span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>

    </div>
</div>
    <!-- END HEADER -->

    <div class="page-wrapper-row full-height">
        <div class="page-wrapper-middle">
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <div class="container">
                            <!-- BEGIN PAGE TITLE -->
                            <div class="page-title">
                                <h1>Single Blog
                                    <small>Blog for gcan</small>
                                </h1>
                            </div>
                            <!-- END PAGE TITLE -->
                            <!-- BEGIN PAGE TOOLBAR -->
                            <!-- END PAGE TOOLBAR -->
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE CONTENT BODY -->
                    <div class="page-content">
                        <div class="container">
                            <!-- BEGIN PAGE BREADCRUMBS -->
                            <ul class="page-breadcrumb breadcrumb">
                                <li>
                                    <a href="/">首页</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span ><?php echo $article['title']; ?></span>
                                </li>
                            </ul>
                            <!-- END PAGE BREADCRUMBS -->
                            <!-- BEGIN PAGE CONTENT INNER -->
                            <div class="page-content-inner">
                                <div class="blog-page blog-content-2">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="blog-single-content bordered blog-container">
                                                <div class="blog-single-head">
                                                    <h1 class="blog-single-head-title" ><?php echo $article['title']; ?></h1>
                                                    <div class="blog-single-head-date">
                                                        <i class="icon-calendar font-blue"></i>
                                                        <a href="javascript:;" >
                                                            <?php

                                                                    $time = strtotime($article['create_time']);
                                                                    $time = date("F j, Y",$time);
                                                                    echo $time;

                                                               ?>
                                                        </a>
                                                    </div>
                                                </div>

                                                <!--<div class="blog-single-img">-->
                                                <!--<img src="<?php if($pc == 'pc'){echo '__STATIC__/assets/pages/img/page_general_search/5.jpg';}else{ echo '__STATIC__/img/kaola.jpg';} ?>" />-->
                                                <!--</div>-->


                                                <div class="blog-single-desc">
                                                    <!--<div class="" style="color:#000000;">-->
                                                    <?php

                                                  echo file_get_contents(ROOT_PATH."public/static/article/".$article['content'].".html");


                                                ?>
                                                </div>
                                                <div class="blog-single-foot">
                                                    <ul class="blog-post-tags">

                                                        <?php

                                                    $tag = $article['tag'];
                                                    $arr = explode(",",$tag);

                                                    $str = "";
                                                    for($i=0;$i<count($arr);$i++){
                                                        if($arr[$i] == ''){}else{
                                                            $str .= "<li class='uppercase'>
                                                        <a href='/tag?tag=".$arr[$i]."'>".$arr[$i]."</a>
                                                        </li>";
                                                        }
                                                        }
                                                        echo $str;

                                                        ?>


                                                    </ul>
                                                </div>


                                                <!--http://www.uyan.cc/demo-->

                                                <!-- UY BEGIN -->
                                                <div id="uyan_frame"></div>
                                                <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2145144"></script>
                                                <!-- UY END -->



                                            </div>
                                        </div>


                                        <div class="col-lg-3">
    <div class="blog-single-sidebar bordered blog-container">

        <form action="/search" method="get">

            <div class="blog-single-sidebar-search">
                <div class="input-icon right">
                    <i  class="icon-magnifier"></i>

                    <input  name="search" type="text" class="form-control" placeholder="Search Blog"> </div>
            </div>

        </form>



        <div class="blog-single-sidebar-recent">
            <h3 class="blog-sidebar-title uppercase" style="font-weight: 900;font-size: 30px;color: #111;">近期文章</h3>
            <ul>

                <?php if(is_array($recent_article_list) || $recent_article_list instanceof \think\Collection || $recent_article_list instanceof \think\Paginator): $i = 0; $__LIST__ = $recent_article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                    <li>
                        <a  href="/single_page?cc=<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a>
                    </li>

                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li>-->
                    <!--<a href="javascript:;">Metronic Admin Progress</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:;">New UI Features</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:;">Lorem Ipsum Dolore Amet</a>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<a href="javascript:;">Userfull Pages Released</a>-->
                <!--</li>-->
            </ul>
        </div>
        <div class="blog-single-sidebar-tags">
            <h3 class="blog-sidebar-title uppercase" style="font-weight: 900;font-size: 30px;color: #111;">标签</h3>
            <ul class="blog-post-tags">

                <?php

                    $count = count($tag_list);

                    for($i = 0;$i < $count;$i++){
                       echo '<li class="uppercase">
                                      <a  href="/tag?tag='.$tag_list[$i].'">'.$tag_list[$i].'</a>
                              </li>';

                    }


                ?>










                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">HTML</a>-->
                <!--</li>-->
                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">CSS</a>-->
                <!--</li>-->
                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">Gulp</a>-->
                <!--</li>-->
                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">Framework</a>-->
                <!--</li>-->
                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">Admin Theme</a>-->
                <!--</li>-->
                <!--<li class="uppercase">-->
                    <!--<a href="javascript:;">UI Features</a>-->
                <!--</li>-->
            </ul>
        </div>


        <div class="blog-single-sidebar-links" style="display: none;">
            <h3 class="blog-sidebar-title uppercase">Useful Links</h3>
            <ul>
                <li>
                    <a href="javascript:;">Lorem Ipsum </a>
                </li>
                <li>
                    <a href="javascript:;">Dolore Amet</a>
                </li>
                <li>
                    <a href="javascript:;">Metronic Database</a>
                </li>
                <li>
                    <a href="javascript:;">UI Features</a>
                </li>
                <li>
                    <a href="javascript:;">Advanced Forms</a>
                </li>
            </ul>
        </div>
        <div class="blog-single-sidebar-ui" style="display: none;">
            <h3 class="blog-sidebar-title uppercase">UI Examples</h3>
            <div class="row ui-margin">
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/1.jpg" />
                    </a>
                </div>
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/37.jpg" />
                    </a>
                </div>
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/57.jpg" />
                    </a>
                </div>
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/53.jpg" />
                    </a>
                </div>
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/59.jpg" />
                    </a>
                </div>
                <div class="col-xs-4 ui-padding">
                    <a href="javascript:;">
                        <img src="__STATIC__/assets/pages/img/background/42.jpg" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




                                    </div>
                                </div>
                            </div>
                            <!-- END PAGE CONTENT INNER -->
                        </div>
                    </div>
                    <!-- END PAGE CONTENT BODY -->
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->



                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
        </div>
    </div>


    <div class="page-wrapper-row " >
    <div class="page-wrapper-bottom">
        <!-- BEGIN FOOTER -->
        <!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter" style="background: #111111;">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>格言</h2>
                        <p> One-day is doomed, seven by hard work, love fight will win! </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                        <h2>发送邮件</h2>
                        <div class="subscribe-form">
                            <form action="javascript:;">
                                <div class="input-group">
                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Follow Us On</h2>
                        <ul class="social-icons">
                            <li>
                                <a title="haha" href="javascript:;" data-original-title="rss" class="rss"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>联系</h2>
                        <address class="margin-bottom-40">
                            <br><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1528667112&site=qq&menu=yes"><img border="0" style="width:25px;" src="http://wpa.qq.com/pa?p=2:1528667112:52" alt="点击这里给我发消息" title="点击这里给我发消息"/></a> QQ:
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=1528667112&site=qq&menu=yesmqq://im/chat?chat_type=wpa&uin=1528667112&version=1&src_type=web">1528667112</a>

                            <br> Email:
                            <a href="mailto:1528667112@qq.com">1528667112@qq.com</a>
                            <br>WeChat: gw1528667112



                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer" style="background: #000000;">
            <div class="container"> 皖ICP备17017687号
                <!--<a  href="">GCAN</a>-->
            </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
    </div>
</div>






<!--&lt;!&ndash; JiaThis Button BEGIN &ndash;&gt;-->
<!--<div style="margin-left: -110px !important;" class="jiathis_share_slide jiathis_share_32x32" id="jiathis_share_slide">-->
<!--<div class="jiathis_share_slide_top" id="jiathis_share_title"></div>-->
<!--<div class="jiathis_share_slide_inner">-->
<!--<div class="jiathis_style_32x32">-->
<!--<a class="jiathis_button_qzone"></a>-->
<!--<a class="jiathis_button_tsina"></a>-->
<!--<a class="jiathis_button_tqq"></a>-->
<!--<a class="jiathis_button_weixin"></a>-->
<!--<a class="jiathis_button_renren"></a>-->
<!--<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>-->
<!--<script type="text/javascript">-->
<!--var jiathis_config = {-->
<!--slide:{-->
<!--divid:'jiathis_main',-->
<!--pos:'left'-->
<!--}-->
<!--};-->
<!--</script>-->

<!--</div></div></div>-->
<!--&lt;!&ndash; JiaThis Button END &ndash;&gt;-->

<!--<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>-->
<!--<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_slide.js" charset="utf-8"></script>-->






<script>(function(){
    var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?813bf086da477bffef285b99a9d2d0d1":"https://jspassport.ssl.qhimg.com/11.0.1.js?813bf086da477bffef285b99a9d2d0d1";
    document.write('<script src="' + src + '" id="sozz"><\/script>');
})();
</script>

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?e259303fc49d5b01efef69eb352b749d";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>



<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>


</div>
<!-- BEGIN QUICK NAV -->


<!-- END QUICK NAV -->



<!--[if lt IE 9]>
<script src="__STATIC__/assets/global/plugins/respond.min.js"></script>
<script src="__STATIC__/assets/global/plugins/excanvas.min.js"></script>
<script src="__STATIC__/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="__STATIC__/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="__STATIC__/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="__STATIC__/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="__STATIC__/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->



<script>
    $(document).ready(function(){
        $("pre").addClass("language-*");
    }());
</script>

</body>

</html>