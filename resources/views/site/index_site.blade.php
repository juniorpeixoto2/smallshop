<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>Small Shop</title>

    <!--favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!--Icons css-->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!--mCustomScrollbar css-->
    <link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

    <!--Style css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Horizontal-menu Css -->
    <link href="assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

</head>

<body class="app ">
    <div id="spinner"></div>
    <div id="app" class="page">
        <div class="main-wrapper page-main">
            <nav class="navbar navbar-expand-lg main-navbar" id="headerMenuCollapse">
                <div class="container">
                    <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <a class="header-brand" href="{{ url('/') }}">
                        <img src="assets/img/brand/logo.png" class="header-brand-img" alt="  Asta-Admin  logo">
                    </a>
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none navsearch"><i class="ion ion-search"></i></a></li>
                    </ul>
                    <form class="form-inline mr-auto">
                        <div class="form-inline mr-auto horizontal">
                            <div class=" d-none d-lg-block">

                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav navbar-right ">



                        <li class="dropdown dropdown-list-toggle">
                            <a href="#" class="nav-link nav-link-lg full-screen-link">
                                <i class="fa fa-expand" id="fullscreen-button"></i>
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
            <!--Horizontal-menu-->
            <div class="horizontal-main clearfix">
                <div class="horizontal-mainwrapper container clearfix">
                    <nav class="horizontalMenu clearfix">
                        <ul class="horizontalMenu-list">
                            <li aria-haspopup="true"><a href="{{ url('/') }}" class=""><i class="fa fa-home"></i> Home</a></li>
                            <li aria-haspopup="true"><a href="{{ url('/cart') }}" class=""><i class="fa fa-tv"></i> Carrinho</a></li>
                            <li aria-haspopup="true"><a href="{{ url('/adm') }}" class=""><i class="fa fa-lock"></i> Painel Admin</a></li>


                        </ul>
                    </nav>
                    <!--Menu HTML Code-->
                </div>
            </div>

            <div class="container content-area">
                <section class="section">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        <li class="ml-auto d-lg-flex d-none">

                        </li>
                    </ol>
                    <div class="section-body ">
                        @yield('content')
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                <div class="text-center">
                    Copyright &copy; SmallShop 2021</a>
                </div>
            </footer>
        </div>
    </div>

    <!--Jquery.min js-->
    <script src="assets/js/jquery.min.js"></script>

    <!--popper js-->
    <script src="assets/js/popper.js"></script>

    <!--Tooltip js-->
    <script src="assets/js/tooltip.js"></script>

    <!--Bootstrap.min js-->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--Jquery.nicescroll.min js-->
    <script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

    <!--mCustomScrollbar js-->
    <script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Scroll-up-bar.min js-->
    <script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

    <!--Horizontal-menu Js-->
    <script src="assets/plugins/horizontal-menu/webslidemenu.js"></script>

    <!--Othercharts js-->
    <script src="assets/plugins/othercharts/jquery.knob.js"></script>
    <script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

    <!--Scripts js-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>