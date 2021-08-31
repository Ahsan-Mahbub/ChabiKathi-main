@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
@endsection
@extends('fontend.layouts.app')
@section('content')
	<div class="ex-padding">
	</div>
	<!-- Upper Title Section -->
	<section class="upper-title-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 breadcrumbs">
					<ul class="page-breadcrumbs">
						<li><a title="Home" href="/">Home</a>
							<span class="breadcome-separator">&gt;</span>
						</li>
						<li><a title="{{$product->category? $product->category->category_name : 'null'}}" href="/category/{{$product->category->slug}}">{{$product->category? $product->category->category_name : ''}}</a>
							<span class="breadcome-separator">&gt;</span>
						</li>
						<li>{{$product->product_name}}</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Upper Title Section -->
	<!-- Single Product Image Section -->
	<section class="single-image">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-9">
					<div class="product-infos-area">
						<div class="row">
							<div class="product-image-display col-sm-12 col-md-5">
								<a class="mb-15 text-center" href="/{{$product->product_img}}">
									<div class="reset-everything">
										<div class="pdp-display-image-wrap">
											<div class="img-zoom-container">
											  <img id="myimage" src="/{{$product->product_img}}" alt="Product Image">
											  <div id="myresult" class="img-zoom-result" style=""></div>
											</div>
										</div>
									</div>
								</a>
								<div class="single-product-tab mt-15">
									<div class="pdp-single-product-thumb active">
										<img src="/{{$product->product_img}}" alt="">
									</div>
									<div class="pdp-single-product-thumb">
										<img src="/{{$product->product_img_2}}" alt="">
									</div>
									<div class="pdp-single-product-thumb">
										<img src="/{{$product->product_img_3}}" alt="">
									</div>
								</div>
							</div>
							<div class="product-details-section col-sm-12 col-md-7">
								<div class="product-view-single-product-area-r">
									<div class="dev-flex-sb">
										<h3 class="small-title mb-10">{{$product->product_name}}</h3>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Shop: </span>
										<a class="pdp-shop-link" href="/">{{$product->shop}}</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Brand: </span>
										<a class="pdp-shop-link" href="/">Brand Name</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Categories: </span>
										<a class="pdp-shop-link" href="/product/{{$product->category->slug}}">{{$product->category? $product->category->category_name : ''}}</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">SKU: </span>
										<a class="pdp-shop-link">{{$product->sku}}</a>
									</div>
									<div class="product-view-single-product-area-r-quantity">
										<form action="#">
											<div class="attr-wrapper">
												<div class="options">
													<div class="product-view-single-product-area-r-price mb-20">
														<span class="old-price">
															<?php
																if($product->discount)
																{
																	echo "৳ {{$product->discount}}";
																}
															?>
														</span>
														<span class="new-price">৳ {{$product->price}}</span>
													</div>
														<div class="quantity dev-flex-l mb-20">
															<label>Quantity</label>
															<div class="inputArea">
																<div class="decrease dev-flex" type="button" value="-" id="moins" onclick="minus()">-</div>
																<input type="text" class="input-text" readonly="" value="1" id="count">
																<div type="button" value="+" class="increase dev-flex" id="plus" onclick="plus()">+</div>
															</div>
														</div>

														<div class="button-section">
															<button type="button" class="btn btn-danger mr-10 mt-10">Add to Cart</button>
															<button type="button" class="btn btn-warning button-reverse button mt-10 mr-10">Buy Now</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-3">
						<div class="product-delivery-and-return">
							<div class="delivery-and-return-inner">
								<ul class="delivery-options delivery">
									<li>
										<p class="title">
											<b class="pr-5">Note:</b>Shipping charges will be calculated based on the number of items, item type, weight and volume.
											<a href="/" target="_blank" class="highlighted-txt">More info...</a>
										</p>
									</li>
									<li>
										<div class="details">
											<p class="title">Cash on Delivery available</p>
										</div>
									</li>
								</ul>
								<h4 class="mb-10 small-title">Return and Warranty</h4>
								<ul class="delivery-options warrenty">
									<li>
										<div class="details">
											<p class="title">Doorstep Return
												<span class="sub-title">(Easy Product Return from Your Doorstep)</span>
											</p>
											<p class="sub-title">Change of mind not available</p>
											<p class="title">
												<a href="/terms">Terms and Conditions</a>
											</p>
										</div>
									</li>
									<li>
										<div class="details">
											<p class="title">Warranty is not available</p>
										</div>
									</li>
								</ul>
								<div class="product-view-single-product-area-r-sharing mt-30">
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Single Product Image Section -->
	<!-- End Header Section -->
	<!-- Details and Review Section -->
	<section class="description-and-review">
		<div class="container">
			<div class="row">
				<div class="description-and-review-tab">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="description-and-review-tab-content mb-30">
							<div class="description-and-review-tab-content-menu">
								<ul class="nav nav-inline">
									<li><button class="tablinks tab" onclick="openCity(event, 'Description')">Description</button></li>
									<li><button class="tablinks tab" onclick="openCity(event, 'Reviews')">Reviews</button></li>
									<li><button class="tablinks tab" onclick="openCity(event, 'Comments')">Comments</button></li>
									<li><button class="tablinks tab-active tab" onclick="openCity(event, 'Warranty')">Return and Warranty Policy</button></li>
								</ul>
							</div>
							<div class="desc-section">
								<div id="Description" class="tabcontent">
								  <h3>London</h3>
								  <p>London is the capital city of England.</p>
								</div>

								<div id="Reviews" class="tabcontent">
								  <h3>Paris</h3>
								  <p>Paris is the capital of France.</p> 
								</div>

								<div id="Comments" class="tabcontent">
								  <div class="col-md-6">
								  	<div class="container">
									  	<div class="row">
									  		<form>
												  <div class="form-row">
												    <div class="form-group col-md-12">
												      <label for="name">User Name</label>
												      <input type="text" class="form-control" id="name" placeholder="User Name...">
												    </div>
												    <div class="form-group col-md-12">
												      <label for="email">Email</label>
												      <input type="email" class="form-control" id="email" placeholder="User Email...">
												    </div>
												    <div class="form-group col-md-12">
												      <label for="comment">Comments</label>
												      <textarea type="text" class="form-control" id="comment"></textarea>
												    </div>
												  </div>
												  <button type="submit" class="btn btn-primary comment-button">Submit</button>
												</form>
									  	</div>
									  </div>
								  </div>
								</div>

								<div id="Warranty" class="tabcontent">
								  <h3>Tokyo</h3>
								  <p>Tokyo is the capital of Japan.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Details and Review Section -->
	<!-- Related Product Section -->
	@if($related_product)
	<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Related Product Section</h2></a>
					</div>
				<div class="row">
					<div class="col-md-12">
						@foreach($related_product as $related)
						<div class="col-md-2 product-box">
							<a href="/product/{{$related->product_slug}}">
								<div class="product-img">
									<img src="/{{$related->product_img}}">
								</div>
								<span class="product-name">{{$related->product_name}}</span>
								<span class="previous-price">
									<?php
										if($related->discount)
										{
											echo "৳ {{$related->discount}}";
										}
									?>
								</span>
								<span class="present-price">৳ {{$related->price}}</span>
								<div class="buttons text-center">
									<button class="btn btn-danger">Add to Cart</button>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		@endif
	<!-- End Related Product Section -->
@endsection
@section('script')
<script src="{{ asset('asset/fontend/asset/js/zoomimage.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/tabcontent.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/countdown.js')}}"></script>
@endsection