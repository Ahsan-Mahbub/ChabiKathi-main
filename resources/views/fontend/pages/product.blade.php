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
						<li><a title="Tools &amp; DIY" href="/categories/5f97c329ca882e1a4853d014?categoryName=Tools &amp; DIY">Tools &amp; DIY</a>
							<span class="breadcome-separator">&gt;</span>
						</li>
						<li>High power mini light- HK-49 (CODAUG21)</li>
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
								<a class="mb-15 text-center" href="{{ asset('asset/fontend/asset/img/product1.jpeg')}}">
									<div class="reset-everything">
										<div class="pdp-display-image-wrap">
											<div class="img-zoom-container">
											  <img id="myimage" src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}" alt="Product Image">
											  <div id="myresult" class="img-zoom-result" style=""></div>
											</div>
										</div>
									</div>
								</a>
								<div class="single-product-tab mt-15">
									<div class="pdp-single-product-thumb active">
										<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}" alt="">
									</div>
									<div class="pdp-single-product-thumb">
										<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}" alt="">
									</div>
									<div class="pdp-single-product-thumb">
										<img src="{{ asset('asset/fontend/asset/img/product1.jpeg')}}" alt="">
									</div>
								</div>
							</div>
							<div class="product-details-section col-sm-12 col-md-7">
								<div class="product-view-single-product-area-r">
									<div class="dev-flex-sb">
										<h3 class="small-title mb-10">High power mini light- HK-49 (CODAUG21)</h3>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Shop: </span>
										<a class="pdp-shop-link" href="/">AK Factory</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Brand: </span>
										<a class="pdp-shop-link" href="/">Brand Name</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">Categories: </span>
										<a class="pdp-shop-link" href="/">Watch Category</a>
									</div>
									<div class="shop-name mb-10">
										<span class="pdp-label">SKU: </span>
										<a class="pdp-shop-link">CODAUG21_DN360521NAJ-3517</a>
									</div>
									<div class="product-view-single-product-area-r-description mb-10">
										<p>High power mini light- HK-49</p>
									</div>
									<div class="product-view-single-product-area-r-quantity">
										<form action="#">
											<div class="attr-wrapper">
												<div class="options">
													<div class="product-view-single-product-area-r-price mb-20">
														<span class="old-price">৳650</span>
														<span class="new-price">৳400</span>
													</div>
														<div class="quantity dev-flex-l mb-20">
															<label>Quantity</label>
															<div class="inputArea">
																<div class="decrease dev-flex">-</div>
																<input type="text" class="input-text" min="1" max="5" readonly="" value="1">
																<div class="increase dev-flex">+</div>
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
	<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href="/"><h2>Related Product Section</h2></a>
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
	<!-- End Related Product Section -->
@endsection
@section('script')
<script src="{{ asset('asset/fontend/asset/js/zoomimage.js')}}"></script>
<script src="{{ asset('asset/fontend/asset/js/tabcontent.js')}}"></script>
@endsection