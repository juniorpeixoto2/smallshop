<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>Asta - Bootstrap 4 Responsive Clean Admin HTML5 Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/icons.css">

    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/style.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Chartist css-->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/plugins/chartist/chartist.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/plugins/chartist/chartist-plugin-tooltip.css">

    <!-- Horizontal-menu Css -->
    <link href="{{ asset('/') }}/assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="{{ asset('/') }}/assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

</head>

<body class="app ">
    <div id="spinner"></div>
    <div id="app" class="page">
        <div class="main-wrapper page-main">
            <nav class="navbar navbar-expand-lg main-navbar" id="headerMenuCollapse">
                <div class="container">
                    <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <a class="header-brand" href="{{ url('admin') }}">
                        <img src="{{ asset('/') }}/assets/img/brand/logo.png" class="header-brand-img" alt="  Asta-Admin  logo">
                    </a>
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
                    </ul>
                    <form class="form-inline mr-auto">
                        <div class="form-inline mr-auto horizontal">
                            <div class=" d-none d-lg-block">
                                <ul class="nav">

                                </ul>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav navbar-right ">

                        <li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg "><i class="fa fa-envelope-o"></i></a><span class="pulse bg-danger"></span>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Messages
                                    <div class="float-right">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content">
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <img alt="image" src="assets/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                                        <div class="dropdown-item-desc">
                                            <div class="dropdownmsg d-flex">
                                                <div class="">
                                                    <b>Stewart Ball</b>
                                                    <p>Your template awesome</p>
                                                </div>
                                                <div class="time">6 hours ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item dropdown-item-unread">
                                        <img alt="image" src="assets/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                        <div class="dropdown-item-desc">
                                            <div class="dropdownmsg d-flex">
                                                <div class="">
                                                    <b>Jonathan North</b>
                                                    <p>Your Order Shipped.....</p>
                                                </div>
                                                <div class="time">45 mins ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="image" src="assets/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                        <div class="dropdown-item-desc">
                                            <div class="dropdownmsg d-flex">
                                                <div class="">
                                                    <b>Victor Taylor</b>
                                                    <p>Hi!, I' am web developer</p>
                                                </div>
                                                <div class="time"> 8 hours ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="image" src="assets/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                        <div class="dropdown-item-desc">
                                            <div class="dropdownmsg d-flex">
                                                <div class="">
                                                    <b>Ruth Arnold</b>
                                                    <p>Hi!, I' am web designer</p>
                                                </div>
                                                <div class="time"> 3 hours ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <img alt="image" src="assets/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                        <div class="dropdown-item-desc">
                                            <div class="dropdownmsg d-flex">
                                                <div class="">
                                                    <b>Sam Lyman</b>
                                                    <p>Hi!, I' am java developer</p>
                                                </div>
                                                <div class="time"> 15 mintues ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-list-toggle d-none d-lg-block"><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg"><i class="fa fa-bell-o"></i></a><span class="pulse bg-danger"></span>
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Notifications
                                    <div class="float-right">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                                <div class="dropdown-list-content">
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-users  text-primary"></i>
                                        <div class="dropdown-item-desc">
                                            <b>So many Users Visit your template</b>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-exclamation-triangle text-danger"></i>
                                        <div class="dropdown-item-desc">
                                            <b>Error message occurred....</b>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-users text-warning"></i>
                                        <div class="dropdown-item-desc">
                                            <b> Adding new people</b>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-shopping-cart text-success"></i>
                                        <div class="dropdown-item-desc">
                                            <b>Your items Arrived</b>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-comment text-primary"></i>
                                        <div class="dropdown-item-desc">
                                            <b>New Message received</b>
                                            <div class="float-right"><span class="badge badge-pill badge-danger badge-sm">67</span></div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="fa fa-users text-primary"></i>
                                        <div class="dropdown-item-desc">
                                            <b>So many Users Visit your template</b>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-list-toggle">
                            <a href="#" class="nav-link nav-link-lg full-screen-link">
                                <i class="fa fa-expand" id="fullscreen-button"></i>
                            </a>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                                <img src="assets/img/avatar/avatar-1.jpeg" alt="profile-user" class="rounded-circle w-32">
                                <div class="d-sm-none d-lg-inline-block">Victorina</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="profile.html" class="dropdown-item has-icon">
                                    <i class="ion ion-android-person"></i> Profile
                                </a>
                                <a href="profile.html" class="dropdown-item has-icon">
                                    <i class="ion-android-drafts"></i> Messages
                                </a>
                                <a href="profile.html" class="dropdown-item has-icon">
                                    <i class="ion ion-gear-a"></i> Settings
                                </a>
                                <a href="#" class="dropdown-item has-icon">
                                    <i class="ion-ios-redo"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </nav>
            <!--Horizontal-menu-->
            <div class="horizontal-main clearfix">
                <div class="horizontal-mainwrapper container clearfix">
                    <nav class="horizontalMenu clearfix">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true"><a href="{{ url('admin') }}" class="@yield('menu_home')">
                                    <i class="fa fa-home"></i> Home</a>
                            </li>

                            <li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fa fa-table"></i> Tables<span class="wsarrow"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="table.html">Basic Tables</a></li>
                                    <li aria-haspopup="true"><a href="datatables.html">Data Tables</a></li>
                                </ul>
                            </li>


                            <li aria-haspopup="true"><a href="{{ url('admin/users') }}" class="@yield('menu_users')"><i class="fa fa-user"></i> Usuários</a></li>
                            <li aria-haspopup="true"><a href="{{ url('admin/sair') }}" class=""><i class="fa fa-power-off"></i> Sair</a></li>
                        </ul>
                    </nav>
                    <!--Menu HTML Code-->
                </div>
            </div>

            <div class="container content-area">
                <section class="section">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin') }}" class="text-muted">Admin</a></li>
                        <li class="breadcrumb-item active text-" aria-current="page">@yield('title')</li>
                        <li class="ml-auto d-lg-flex d-none">

                        </li>
                    </ol>

                    @yield('content')

                </section>
            </div>

            <footer class="main-footer">
                <div class="text-center">
                    Copyright &copy; Asta-Admin 2018. Design By<a href="https://spruko.com/"> Spruko</a>
                </div>
            </footer>

        </div>
    </div>

    <!--Jquery.min js-->
    <script src="{{ asset('/') }}/assets/js/jquery.min.js"></script>

    <!--popper js-->
    <script src="{{ asset('/') }}/assets/js/popper.js"></script>

    <!--Tooltip js-->
    <script src="{{ asset('/') }}/assets/js/tooltip.js"></script>

    <!--Bootstrap.min js-->
    <script src="{{ asset('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Jquery.nicescroll.min js-->
    <script src="{{ asset('/') }}/assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!--Scroll-up-bar.min js-->
    <script src="{{ asset('/') }}/assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

    <!--Horizontal-menu Js-->
    <script src="{{ asset('/') }}/assets/plugins/horizontal-menu/webslidemenu.js"></script>

    <!--Chart.min js-->
    <script src="{{ asset('/') }}/assets/js/chart.min.js"></script>

    <!--Othercharts js-->
    <script src="{{ asset('/') }}/assets/plugins/othercharts/jquery.knob.js"></script>
    <script src="{{ asset('/') }}/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!--Morris js-->
    <script src="{{ asset('/') }}/assets/plugins/morris/morris.min.js"></script>
    <script src="{{ asset('/') }}/assets/plugins/morris/raphael.min.js"></script>

    <!--mCustomScrollbar js-->
    <script src="{{ asset('/') }}/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Min Calendar -->
    <script src="{{ asset('/') }}/assets/plugins/fullcalendar/calendar.min.js"></script>

    <!--Scripts js-->
    <script src="{{ asset('/') }}/assets/js/apexcharts.js"></script>
    <script src="{{ asset('/') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('/') }}/assets/js/dashboard.js"></script>

    <!-- ECharts -->
    <script src="{{ asset('/') }}/assets/plugins/echarts/echarts.js"></script>

    <!--OtherCharts js-->
    <script src="{{ asset('/') }}/assets/js/othercharts.js"></script>

</body>

</html>