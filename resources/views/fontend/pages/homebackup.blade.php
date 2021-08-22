<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
    <title>Chabikathi – Anything At Anywhere</title>
    <link rel="icon" href="{{ asset('asset/fontend/asset/img/Logo-2.png')}}" sizes="16x16">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
     
    <style>
    	.sc-fixed-nav {
    		transform: scale(0);
    		transition: all 500ms ease-out;
    	}
    	.header-nav {
    		background: #fff;
    		padding: 10px 0px;
    	}
    	.header-nav .category-box {
		     padding: 0; 
		}
		.header-nav .box span a {
		    font-size: 15px;
		}
		.category-navigation-title::after{
			background: transparent;
		}
		/*.category-navigation-title ul{
			padding-left: 0;
		}*/
		.category-navigation-menus{
		    margin-top: 5px;
		    background-color: #fff !important;
		    max-height: 100%;
		    overflow-y: scroll;
		    padding: 0 10px;
		    border-radius: 0 0 4px 4px;
		    overflow: hidden;
		    border: none;
		    width: 19%;
		}
		.category-navigation-menus li {
		    padding: 8px 10px;
		    color: #565656;
		    cursor: pointer;
		    border-bottom: 1px solid #ebebeb;
		    text-transform: capitalize;
		    font-size: 13px;
		    line-height: 18px;
		}
		.category-navigation-menus li a{
		    color: #565656;
		}

		.category-navigation-menus ul{
		    border-top: 2px solid #9c2918;
		}
    </style>	

  </head>
<body>
<div class="main-page">
	<header class="main-header stikybar">
		<!-- Top Header Section -->
		<section class="top-header bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-6 left-side-top">
						<div class="phone-details-top">
							<i class="fas fa-phone"></i>
							<span>01600000000</span>
						</div>
						<div class="mail-details-top">
							<i class="far fa-envelope"></i>
							<span>sapport@chabikathi.com</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12 right-side-top">
						<div class="sell-details-top">
							<i class="far fa-store"></i>
							<span>Sell on Chabikathi</span>
						</div>
						<div class="app-details-top">
							<!-- <img class="img-fluid" src="asset/img/Logo-2.png"> -->
							<i class="fas fa-mobile-alt"></i>
							<span>Save big on our App!</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Top Header Section -->
		<!-- Header Section -->
		<section class="main-top-header bg-white">
			<div class="container">
				<div class="row">
					<!-- Header Logo Section -->
					<div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 site-header-logo">
						<a href="/">
							<img src="asset/img/Logo-2.png">
						</a>
					</div>
					<!-- End Header Logo Section -->
					<!-- Header Search Section -->
					<div class="col-9 col-sm-9 col-md-6 col-lg-7 col-xl-7 site-header-search">
						<div class="search-box-area">
							<div>
								<div class="search-box">
									<div class="search-box-border">
										<div class="search-box-border-select">
											<div class="pr-5 s-container">
												<div class="selecton-wrapper">
													<div class="select " style="width: 150px;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
														<span>product</span>
														<span>
															<i class="fas fa-chevron-down"></i>
														</span>
													</div>
													<div class="selection-values dropdown-menu">
														<ul>
															<li value="product">Product</li>
															<li value="shop">Shop</li>
															<li value="brand">Brand</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										
										<div class="searching-area-wrapper">
											<div class="ant-select-show-search ant-select-auto-complete ant-select">
												<div class="ant-select-selection">
													<ul>
														<li class="ant-select-search">
															<input placeholder="Search Product..." class="ant-input ant-input-lg" type="text" value="">
																<button>
																	<i class="fas fa-search"></i>
																</button>
															<span class="ant-select-search__field__mirror">&nbsp;</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Header Search Section -->
					<!-- Header icon Section -->
					<div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 site-header-cart">
						<div class="cart-logo-img">
							<img src="asset/img/Logo-2.png">
						</div>
						<div class="wish-icon">
							<i class="far fa-heart"></i>
						</div>
						<div class="cart-icon">
							<div class="dropdown">
								<i class="fas fa-shopping-bag">
								  <div class="dropdown-content">
								    <a href="#">My Account</a>
								    <a href="#">Login</a>
								  </div>
							  </i>
						</div>
						<span class="cart-add">0</span>
						</div>
						<div class="profile-icon">
							<div class="dropdown">
								<i class="fas fa-user-circle">
								  <div class="dropdown-content">
								    <a href="#">My Account</a>
								    <a href="#">Login</a>
								  </div>
							  </i>
						</div>
						</div>
					</div>
					<!-- End Header icon Section -->
				</div>
			</div>
		</section>
		<!-- On Scroll Fixed Nav -->
		<section class="header-nav sc-fixed-nav">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
						<div class="category-navigation d-shadow">
							<div data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-th-large" aria-hidden="true" style="color: #822328;"></i>
								<h2 class="category-navigation-title">Categories</h2>
								<i class="fas fa-chevron-down" aria-hidden="true"></i>
							</div>
							<div class="category-navigation-menus dropdown-menu" style="position: fixed;">
								<ul style="padding-left: 0;">
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
									<li><a href="/">Automotive &amp; Motorbike</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Main Slider Section -->
					<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 home-banner">
				        <!-- Category Box Section -->
				        <div class="category-box">
				        	<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/voucher.svg">
					        	<span><a href="/">Voucher Shop</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/prime.svg">
					        	<span><a href="/">Prime Shops</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/rocket.svg">
					        	<span><a href="/">Dhamaka Rocket</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/offers.jpeg">
					        	<span><a href="/">Dhamaka Offers</a></span>
					        </div>
				        </div>
				        <!-- End Category Box Section -->
					</div>
				</div>
			</div>
		</section>	
	</header>
	<!-- End Header Section -->
	<!-- Slider Section -->
	<main>
		<section class="site-banner ptb-20">
			<div class="container">
				<div class="row">
					<!-- Main-Category Section -->
					<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 sidebar-navigation">
						<div class="category-navigation d-shadow">
	 						<h2 class="category-navigation-title">Categories</h2>
							<ul class="category-navigation-menu">
									<div class="dropdown">
									  <li>
									  	<a href="#">Automotive &amp; Motorbike</a>
										<div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
									<div class="dropdown">
									  <li><a href="#">Automotive &amp; Motorbike</a>
										  <div class="dropdown-content">
										    <a href="#">Sub Motorbike 1</a>
										    <a href="#">Sub Motorbike 2</a>
										    <a href="#">Sub Motorbike 3</a>
										    <a href="#">Sub Motorbike 4</a>
										    <a href="#">Sub Motorbike 5</a>
										    <a href="#">Sub Motorbike 6</a>
										  </div>
										</li>
									</div>
							</ul>
						</div>
					</div>
					<!-- End Main-Category Section -->
					<!-- Main Slider Section -->
					<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 home-banner">
						<div class="slider" >
				          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				            <div class="carousel-indicators">
				              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
				            </div>
				            <div class="carousel-inner">
				              <div class="carousel-item active" data-bs-interval="10000">
				                <img src="{{ asset('asset/fontend/asset/img/banner1.jpeg')}}" class="d-block w-100" alt="...">
				                <div class="carousel-caption d-none d-md-block">
				                  <h5>First slide label</h5>
				                  <p>Some representative placeholder content for the first slide.</p>
				                </div>
				              </div>
				              <div class="carousel-item" data-bs-interval="2000">
				                <img src="{{ asset('asset/fontend/asset/img/banner2.jpeg')}}" class="d-block w-100" alt="...">
				                <div class="carousel-caption d-none d-md-block">
				                  <h5>Second slide label</h5>
				                  <p>Some representative placeholder content for the second slide.</p>
				                </div>
				              </div>
				              <div class="carousel-item">
				                <img src="{{ asset('asset/fontend/asset/img/banner3.jpg')}}" class="d-block w-100" alt="...">
				                <div class="carousel-caption d-none d-md-block">
				                  <h5>Third slide label</h5>
				                  <p>Some representative placeholder content for the third slide.</p>
				                </div>
				              </div>
				            </div>
				            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
				              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				              <span class="visually-hidden">Previous</span>
				            </button>
				            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
				              <span class="carousel-control-next-icon" aria-hidden="true"></span>
				              <span class="visually-hidden">Next</span>
				            </button>
				          </div>
				        </div>
				        <!-- End Main Slider Section -->
				        <!-- Category Box Section -->
				        <div class="category-box">
				        	<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/voucher.svg">
					        	<span><a href="/">Voucher Shop</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/prime.svg">
					        	<span><a href="/">Prime Shops</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/rocket.svg">
					        	<span><a href="/">Dhamaka Rocket</a></span>
					        </div>
					        <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 box">
					        	<img src="asset/img/offers.jpeg">
					        	<span><a href="/">Dhamaka Offers</a></span>
					        </div>
				        </div>
				        <!-- End Category Box Section -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Slider Section -->
		<!-- Flash Sale Section -->
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Flash Sale</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
						</div>
					</div>
					<div class="bg-white" style="padding:10px">
						<div id="clockdiv">
							<span class="dead-line" style="color: #e3be38; padding: 15px;font-size: 13px;font-style: italic;letter-spacing: 1px; text-align: center;">On Sale Now</span>
							<span class="dead-line" style="text-align: center;">Ending Time </span>
						  <div>
						    <span class="days"></span>
						    <span class="clone">:</span>
						  </div>
						  <div>
						    <span class="hours"></span>
						    <span class="clone">:</span>
						  </div>
						  <div>
						    <span class="minutes"></span>
						    <span class="clone">:</span>
						  </div>
						  <div>
						    <span class="seconds"></span>
						  </div>
						</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Flash Sale Section -->
		<!-- Shop Section -->
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Shop By Stores</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/shop.png">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Section -->
		<!-- Product Section -->
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Watch Category</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/product1.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Accessories</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/accesory.jpeg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Sports</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/football.png">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Clothes</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/clothes.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Toys</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/toys.webp">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Cosmetics</h2></a>
						<div class="search-and-more">
							<a class="highlighted-txt dev-flex" href="/">
								<b class="highlighted-txt">View All</b>
								<img src="asset/img/side.svg" alt="" height="30px">
							</a>
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						<div class="col-md-2 product-box">
							<a href="">
								<div class="product-img">
									<img src="asset/img/cosmetics.jpg">
								</div>
								<span class="product-name">product name here</span>
								<span class="previous-price">$ 200</span>
								<span class="present-price">$ 100</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- End Product Section -->
	<!-- Footer Section -->
	<footer class="site-footer">
		<!-- Footer Upper Section -->
		<div class="footer-fadding">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-12">
						<div class="section pr-50">
							<div class="section-content">
								<div class="mt-10 download-apps">
									<div class="dev-flex-l">
										<a href="" title="Google Play">
												<img src="asset/img/googleplay.png" alt="Google Play">
										</a>
										<a href="" title="Apple Store">
											<img src="asset/img/apple.png" alt="Apple Store">
										</a>
									</div>
								</div>
								<p class="mb-40">Buy &amp; sell online with Dhamaka. Trust, quality &amp; best customer experience at one place.</p>
								<p class="m-0 mobile">
									<span>Got Question? Call us 24/7</span>
									<a href="tel:09638113366">09638113366</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-12">
						<div class="section">
							<div class="part-title">
								<h3 class="section-heading">Information</h3>
							</div>
							<ul class="section-content">
								<li><a title="" href="/about">About Us</a></li>
								<li><a title="" href="/faq">FAQ</a></li>
								<li><a title="" href="/terms">Terms &amp; Conditions</a></li>
								<li><a title="" href="/contact">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-12">
						<div class="section">
							<div class="part-title">
								<h3 class="section-heading">Customer Service</h3>
							</div>
							<ul class="section-content">
								<li><a title="Order &amp; Payment" href="/payment">Order &amp; Payment</a></li>
								<li><a title="" href="/privacy">Privacy &amp; Policy</a></li>
								<li><a title="" href="/account">My Account</a></li><li><a title="" href="/cart">Shopping cart</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="section">
							<div class="m-0">
								<div class="part-title">
									<h3 class="section-heading">Get In Touch</h3></div>
									<div class="section-content">
										<div class="address">Aqua Tower, Level 8,<br> 43 Bir Uttam AK Khandakar Sarak<br>Mohakhali C/A, Gulshan <br>
											<p class="m-0">
												<a href="">&nbsp;sapport@chabikathi.com</a>
											</p>
										</div>
										<div>
											<ul class="social-icon">
												<li class="social-icon-li">
													<a href="" title="Facebook" class="facebook" target="_blank">
														<i class="fab fa-facebook"></i>
													</a>
												</li>
												<li class="social-icon-li">
													<a href="" title="Facebook" class="facebook" target="_blank">
														<i class="fab fa-facebook"></i>
													</a>
												</li>
												<li class="social-icon-li">
													<a href="" title="Facebook" class="facebook" target="_blank">
														<i class="fab fa-facebook"></i>
													</a>
												</li>
												<li class="social-icon-li">
													<a href="" title="Facebook" class="facebook" target="_blank">
														<i class="fab fa-facebook"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<!-- Footer Lower Section -->
		<div class="footer-lower">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
						<div class="footer-lower-copyr">
							<p class="m-0">Copyright © 2021<a class="highlighted-txt" href="/"> ChabiKathi</a>, Developed By <a class="highlighted-txt" href="/"> Biz IT BD</a>.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">
						<div class="footer-lower-imgs">
							<div class="footer-lower-imgs-img">
								<img src="asset/img/visa.svg">
							</div>
						</div>
						<div class="footer-lower-imgs">
							<div class="footer-lower-imgs-img">
								<img src="asset/img/mastercard.svg">
							</div>
						</div>
						<div class="footer-lower-imgs">
							<div class="footer-lower-imgs-img">
								<img src="asset/img/nogod.png">
							</div>
						</div>
						<div class="footer-lower-imgs">
							<div class="footer-lower-imgs-img">
								<img src="asset/img/okwallet.png">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Section -->
	<div class="side-buttons">
		<ul>
			<li>
				<button class="scroll-top">
					<i class="far fa-arrow-alt-circle-up"></i>
				</button>
			</li>
			</ul>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="asset/js/main.js"></script>
<script src="asset/js/scroll.js"></script>
<script src="asset/js/cursol.js"></script>
<script src="asset/js/timer.js"></script>
</body>
</html>