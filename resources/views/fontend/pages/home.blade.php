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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
							<span class="previous-price">৳ 200</span>
							<span class="present-price">৳ 100</span>
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
					<a href="/all-shop"><h2>Shop By Stores</h2></a>
					<div class="search-and-more">
						<a class="highlighted-txt dev-flex" href="/all-shop">
							<b class="highlighted-txt">View All</b>
							<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
						</a>
				</div>
				</div>
			<div class="row">
				<div class="col-md-12">
					@foreach($shops as $shop)
					<div class="col-md-2 product-box shop-box">
						<a href="/shop/{{$shop->slug}}">
							<div class="product-img">
								<img src="/{{$shop->image}}">
							</div>
							<span class="product-name">{{$shop->shop_name}}</span>
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Section -->
	<!-- Product Section -->
	@foreach($products as $product)
	<section class="product-part">
		<div class="container">
			<div class="product-title dev-flex-sb">
				<a href="/category/{{$product->slug}}"><h2>{{$product->category_name}}</h2></a>
				<div class="search-and-more">
					<a class="highlighted-txt dev-flex" href="/category/{{$product->slug}}">
						<b class="highlighted-txt">View All</b>
						<img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px">
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					@if($product['product'])
                    @foreach($product['product'] as $proInfo)
					<div class="col-md-2 product-box">
						<a href="/product/{{($proInfo['product_slug'])}}">
							<div class="product-img">
								<img src="{{$proInfo['product_img']}}">
							</div>
							<span class="product-name">{{$proInfo['product_name']}}</span>
							<span class="previous-price">
								<?php
									if($proInfo['discount'])
									{
										echo "৳ {$proInfo['discount']}";
									}
								?>
							</span>
							<?php
								$main_price= $proInfo['price'];
								$discount_price= $proInfo['discount'];
								$total_price= $main_price-$discount_price;
							?>
							<span class="present-price">৳ {{$total_price}}</span>
							<div class="buttons text-center">
								<button class="btn btn-danger">Add to Cart</button>
							</div>
						</a>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</section>
	@endforeach


</main>
@endsection
@section('script')
<script src="{{ asset('asset/fontend/asset/js/main.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/cursol.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/timer.js')}}"></script>
@endsection