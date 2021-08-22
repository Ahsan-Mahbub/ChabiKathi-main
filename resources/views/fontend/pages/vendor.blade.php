@section('css')
		<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/vendor.css')}}" />
@endsection
@extends('fontend.layouts.app')
@section('content')
	<div class="ex-padding">
	</div>
	<!-- Shop Section -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-5 title-header">
						<div class="shop-title">
							<h2> Shop</h2>
						</div>
					</div>
					<div class="col-md-4 site-header-search">
						<div class="search-box-area">
							<div>
								<div class="search-box">
									<div class="search-box-border">
										<div class="searching-area-wrapper">
											<div class="ant-select-show-search ant-select-auto-complete ant-select vendor-select">
												<div class="ant-select-selection">
													<ul>
														<li class="ant-select-search">
															<input placeholder="Search Shop..." class="ant-input ant-input-lg" type="text" value="">
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
				</div>
				<div class="col-md-12 button-shop">
					<button class="btn btn-danger"> All Shop</button>
					<button class="btn btn-light"> Cash On Delivery</button>
				</div>
			</div>
		</div>
	</section>
	<section class="product-part">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
						<div class="col-md-2 product-box shop-box">
							<a href="">
								<div class="product-img">
									<img src="{{ asset('asset/fontend/asset/img/shop.png')}}">
								</div>
								<span class="product-name">Shop name here</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="col-md-12 text-center shop-view">
					<button class="btn btn-light">View More</button>
				</div>
			</div>
		</section>
	<!-- End Shop Section -->
@endsection