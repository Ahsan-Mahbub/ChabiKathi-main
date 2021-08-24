@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/slider_stiky.css')}}" />
@endsection
@extends('fontend.layouts.app')
@section('content')
<main>
	<!-- Flash Sale Section -->
	<section class="product-part">
		<div class="container">
				<div class="product-title dev-flex-sb">
					<a href="/"><h2>Flash Sale</h2></a>
					<div class="search-and-more">
						<a class="highlighted-txt dev-flex" href="/">
							<b class="highlighted-txt">View All</b>
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
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
							<img src="shop.pngasset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
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
							<img src="shop.pngasset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/accesory.jpeg')}}">
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
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/football.png')}}">
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
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/clothes.jpg')}}">
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
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/toys.webp')}}">
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
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-2 product-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
								<img src="{{ asset('asset/fontend/asset/img/cosmetics.jpg')}}">
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
@endsection
@section('script')
<script src="{{ asset('asset/fontend/asset/js/main.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/cursol.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/timer.js')}}"></script>
@endsection