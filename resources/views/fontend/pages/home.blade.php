@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/slider_stiky.css')}}" />
@endsection
@extends('fontend.layouts.app')
@section('content')
<?php
// $stocks = DB::table('stocks')->select('*')->join('products','products.id', '=', 'stocks.product_id')->get();
// $related_product = DB::table('products')->select('*')->join('categories','categories.id', '=', 'products.category_id')->where('categories.id', $product->category_id)->where('products.status',1)->where('products.approval',1)->orderBy('products.id','desc')->paginate(18);
?>
<main>
	<!-- Flash Sale Section -->
	<section class="product-part">
		<div class="container">
				<div class="product-title dev-flex-sb">
					<a href="/"><h2>Flash Sale</h2></a>
					<div class="search-and-more">
						<a class="highlighted-txt dev-flex" href="/">
							<b class="highlighted-txt">View All</b>
							<i class="fas fa-angle-double-right"></i>
							<!-- <img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px"> -->
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
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
						</a>
					</div>
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
						</a>
					</div>
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
						</a>
					</div>
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
						</a>
					</div>
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
						</a>
					</div>
					<div class="col-md-2 product-box cat-box">
						<a href="">
							<div class="product-img">
								<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
							</div>
							<span class="product-name">HBQ I7S Double Dual Mini ...</span>
							<div class="text-center con-price">
		                      <span class="present-price">৳ 1200</span>
		                      <span class="previous-price">৳ 1300</span>
		                    </div>
			                <span class="discount-tag-in-percent">- 15% OFF</span>
			              	<small class="in-stock">Stock Available</small>
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
							<i class="fas fa-angle-double-right"></i>
							<!-- <img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px"> -->
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
						<i class="fas fa-angle-double-right"></i>
						<!-- <img src="{{ asset('asset/fontend/asset/img/side.svg')}}" alt="" height="30px"> -->
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					@if($product['product'])
                    @foreach($product['product'] as $proInfo)
                    <div class="col-md-2 product-box cat-box">
						<a href="/product/{{($proInfo['slug'])}}">
							<div class="product-img">
								<img src="{{$proInfo['product_img']}}">
							</div>
							<span class="product-name">{{$proInfo['product_name']}}</span>
							<div class="text-center con-price">
		                      	<?php
									if ($proInfo['discounted_price']) {
										?>
											<span class="present-price">৳ {{$proInfo['discounted_price']}}</span>
					                    	<span class="previous-price">৳ {{$proInfo['price']}}</span>
										<?php
									}else{
										?>
										<span class="present-price">৳ {{$proInfo['price']}}</span>
										<?php
									}
								?>
		                    </div>
			                <?php
								if ($proInfo['percentage']) {
									?>
									<span class="discount-tag-in-percent">- {{$proInfo['percentage']}}% OFF</span>
									<?php
								}
							?>
							<small class="in-stock text-success">Stock Available</small>
							<!-- @foreach($proInfo['stock'] as $stocks)
							<?php
								if ($stocks['quantity']) {
									?>
									<small class="in-stock text-success">Stock Available</small>
									<?php
								}else{
									?>
									<small class="in-stock text-danger">Out of Stock</small>
									<?php
								}
							?>
							@endforeach -->
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