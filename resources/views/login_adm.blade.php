<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<title>Asta - Bootstrap 4 Responsive Clean Admin HTML5 Dashboard Template</title>

	<!--Favicon -->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!--Icons css-->
	<link rel="stylesheet" href="assets/css/icons.css">

	<!--Style css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--mCustomScrollbar css-->
	<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

</head>

<body class="bg-light">
	<div id="app">
		<section class="section section-2">
			<div class="container">
				<div class="row">
					<div class="single-page single-pageimage construction-bg cover-image " data-image-src="assets/img/weather1.jpeg">
						<div class="row">
							<div class="col-lg-6 col-xl-6">
								<div class="mt-xl-5">
									<div class="bg-transparent carouselTestimonial1 p-4 mx-auto mt-xl-5 mb-3 w-600">
										<div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
											<ol class="carousel-indicators carousel-indicators1">
												<li data-target="#carouselTestimonial" data-slide-to="0" class="active"></li>
												<li data-target="#carouselTestimonial" data-slide-to="1"></li>
												<li data-target="#carouselTestimonial" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item text-center active">
													<img src="assets/img/brand/logo-white.png" class="mb-2  mt-lg-0 " alt="logo">
													<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adipiscing elit varius quam at, luctus dui. Mauris magna metus consectetur adipiscing elit.</p>
												</div>
												<div class="carousel-item text-center">
													<img src="assets/img/brand/logo-white.png" class="mb-2  mt-lg-0 " alt="logo">
													<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adip varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel.</p>
												</div>
												<div class="carousel-item text-center">
													<img src="assets/img/brand/logo-white.png" class="mb-2  mt-lg-0 " alt="logo">
													<p class="m-0 pt-2 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, consectetur adipiscing elit consectetur adipiscing elit luctus dui. Mauris magna metus.</p>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6">
								<div class="login-sec">
									<div class=" text-center card mb-0" style="background: #000000;">
										@include('commons.alerts')

										<form action="<?php echo url('adm') ?>" method="post" id="login" class="card-body" tabindex="500">
											@csrf
											<h4 class="mb-3">Login</h4>
											<div class="erro">
												<div style='background: red; color: blue;'>
												</div>
											</div>
											<div class="">
												<div class="form-group">
													<input name="email" type="text" autofocus required class="form-control" id="exampleInputEmail1" placeholder="User">
												</div>
												<div class="form-group">
													<input name="password" type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password">
												</div>
												<div class="checkbox">
												</div>
											</div>
											<div class="submit mt-3 mb-3">
												<button class="btn btn-primary btn-block" type="submit">
													Login</button>
											</div>
										</form>
										<div class="flex-c-m text-center mb-4">

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

	<!--Scroll-up-bar.min js-->
	<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
	<script src="assets/js/moment.min.js"></script>

	<!--Othercharts js-->
	<script src="assets/plugins/othercharts/jquery.knob.js"></script>
	<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>

	<!--mCustomScrollbar js-->
	<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

	<!--Horizontal-menu Js-->
	<script src="assets/plugins/horizontal-menu/webslidemenu.js"></script>

	<!--Scripts js-->
	<script src="assets/js/scripts.js"></script>
</body>

</html>