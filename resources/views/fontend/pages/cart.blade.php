@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/checkout.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/cart.css')}}" />
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
						<li>Cart</li>
					</ul>
					<h2 class="page-heading">SHOPPING &amp; CART</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- End Upper Title Section -->

	<!-- Content Section -->
	<div class="container">
		<div class="row rows">
			<section class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 checkout-left-content">
				<div class="white-box-with-box-shadow mb-30">

						<div class="d-none"></div>
						<div class="cart-item-heading d-flex">
							<span class="item-shop">
								<a title="Apple Flagship Store for MBFJUN21" class="ml-5" href="">Apple Flagship Store for MBFJUN21</a>
							</span>
						</div>
						<div class="table-wrap">
							<table>
								<tbody>
									<tr>
										<td>
											<figure class="item-image">
												<img height="100px" width="auto" src="https://i.postimg.cc/zB47cpVk/5.jpg" alt="image">
											</figure>
										</td>
										<td>
											<div class="product-title text-left pb-10">
												<a title="iPhone 12 Pro 256GB (MBFJUN21)" href="">iPhone 12 Pro 256GB (MBFJUN21)</a>
											</div>
											<div class="product-short-description text-left">iPhone 12 Pro 256GB (MBFJUN21)</div>
											<div class="product-short-description text-left">Quantity: 1</div>
										</td>
										<td class="price-div">
											<div class="price">
												<span class="current-price">$
													<span class="currency"></span>113399
												</span>
												<span class="old-price">$
													<del><span class="currency"></span>161999</del>
												</span>
											</div>
										</td>
										<td class="price-div">
											<div class="quantity d-flex">
												<div class="decrease dev-flex">-</div>
												<input type="text" class="input-text" min="1" max="5" readonly="" value="1">
												<div class="increase dev-flex">+</div>
												<div class="delete-item">
													<i class="fas fa-trash-alt"></i>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

				</div>
			</section>
			<section class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 checkout-right-content">
				<div class="cart-total-price-calculation white-box-with-box-shadow mb-30">
					<div class="cart-heading">
						<h5 class="text-uppercase">Cart Total</h5>
						<span class="total-item-in-cart">(1) items</span>
					</div>
					<ul class="cart-info-list">
						<li>
							<label class="label">Subtotal</label>
							<span class="value">
								<span class="currency">$</span><span>475</span>
							</li>
							<li>
								<label class="label">Shipping fee</label>
								<span class="value">
									<span class="currency">$</span>0</span>
								</li>
								<li>
									<span class="value"><b>Note: </b> Shipping charges will be calculated based on the number of items, item type, weight and volume. 
										<a class="highlighted-txt" href="/" target="_blank">More info ...</a>
									</span>
									<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 form-fild email mb-30 text-upper">
										<input type="text" placeholder="Cupon Code" name="" value="">
									</div>
									<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 place-order place-order-upper">
										<button class="place-order-button">Apply Cupon</button>
									</div>
								</li>
								<li class="cart-total-price">
									<label class="label">Total fee</label>
									<span class="value">
										<span class="currency">$</span>475</span>
									</li>
								</ul>
							</div>
							<div class="place-order mb-30">
								<button class="place-order-button">Porced To Checkout</button>
								<small class="highlighted-txt"></small>
							</div>
						</section>
		</div>
	</div>
	<!-- End Content Section -->
@endsection