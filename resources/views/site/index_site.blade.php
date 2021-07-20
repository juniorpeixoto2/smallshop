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
                    <a class="header-brand" href="index.html">
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
                        <div class="row">
                            <div class="col-md-12 col-lg-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Category</h4>
                                    </div>
                                    <div class="filter-content">
                                        <div class="card-body">
                                            <form>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Dress
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Bags & Purses
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Beauty
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Jeans
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check ">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Jewellery
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Electronics
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Sports
                                                    </span>
                                                </label> <!-- form-check.// -->
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Watches
                                                    </span>
                                                </label>
                                                <label class="form-check mb-0">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-label">
                                                        Accessories
                                                    </span>
                                                </label> <!-- form-check.// -->
                                            </form>
                                        </div> <!-- card-body.// -->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Price Range</h4>
                                    </div>
                                    <div class="card-body sliders">
                                        <div class="">
                                            <div class="radio">
                                                <input type="radio" name="shop-filter__price" id="shop-filter-price_1" value="" checked="">
                                                <label for="shop-filter-price_1">Under $25</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="shop-filter__price" id="shop-filter-price_2" value="">
                                                <label for="shop-filter-price_2">$25 to $50</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="shop-filter__price" id="shop-filter-price_3" value="">
                                                <label for="shop-filter-price_3">$50 to $100</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="shop-filter__price" id="shop-filter-price_4" value="specify">
                                                <label for="shop-filter-price_4" class="mb-0">Other (specify)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Filter</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Brand</label>
                                            <select name="beast" id="select-beast" class="form-control custom-select">
                                                <option value="0">--Select--</option>
                                                <option value="1">Wallmart</option>
                                                <option value="2">Catseye</option>
                                                <option value="3">Moonsoon</option>
                                                <option value="4">Textmart</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Color</label>
                                            <select name="beast" id="select-beast1" class="form-control custom-select">
                                                <option value="0">--Select--</option>
                                                <option value="1">White</option>
                                                <option value="2">Black</option>
                                                <option value="3">Red</option>
                                                <option value="4">Green</option>
                                                <option value="5">Blue</option>
                                                <option value="6">Yellow</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Type</label>
                                            <select name="beast" id="select-beast2" class="form-control custom-select">
                                                <option value="0">--Select--</option>
                                                <option value="1">Extra Small</option>
                                                <option value="2">Small</option>
                                                <option value="3">Medium</option>
                                                <option value="4">Large</option>
                                                <option value="5">Extra Large</option>
                                            </select>
                                        </div>
                                        <a class="btn btn-primary" href="#">Search</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-9">
                                <div class="row product-list">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/1.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Chudidhar</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$70.00</li>
                                                        <li class="new_price">$45.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/2.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Top</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$30.00</li>
                                                        <li class="new_price">$25.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/3.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Lehanga</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$50.00</li>
                                                        <li class="new_price">$30.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/4.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Fashion Top</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$25.00</li>
                                                        <li class="new_price">$13.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/5.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Children Frock</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$40.00</li>
                                                        <li class="new_price">$35.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/6.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Long Frock</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$16.00</li>
                                                        <li class="new_price">$12.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/7.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Kid Fashion Frock</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$20.00</li>
                                                        <li class="new_price">$15.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/8.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Bridal Frock</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$23.00</li>
                                                        <li class="new_price">$12.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class=" product_item text-center">
                                                <div class="product_img bg_gray">
                                                    <img class="pro_img" alt="Product" src="assets/img/products/9.jpg">
                                                    <div class="hover">
                                                        <div class="shop-details">
                                                            <a href="shop-cart.html" class="adtocart bg-primary">
                                                                <i class="fe fe-shopping-cart"></i>
                                                            </a>
                                                            <a href="shop-cart.html" class="adtocart bg-success">
                                                                <i class="fe fe-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product_details">
                                                    <div class="text-center text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <h5><a href="product-details.html">Long Frock</a></h5>
                                                    <ul class="product_price list-unstyled">
                                                        <li class="old_price">$59.00</li>
                                                        <li class="new_price">$48.00</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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