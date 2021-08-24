@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/checkout.css')}}" />
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
						<li><a title="Tools &amp; DIY" href="/categories/5f97c329ca882e1a4853d014?categoryName=Tools &amp; DIY">Cart</a>
							<span class="breadcome-separator">&gt;</span>
						</li>
						<li>Checkout</li>
					</ul>
					<h2 class="page-heading">Checkout</h2>
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
					<h4 class="pb-10">Shipping &amp; billing address</h4>
					<div>
						<div>
						<form>
							<h4 class="small-title border-with-bottom-padding">Shipping &amp; Billing Details
								<small class="pull-right mr-10">
									<button>Back</button>
								</small>
							</h4>
							<div class="row billing-fields">
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild first-name mb-30">
									<p>
										<label>First name<span class="required">*</span></label>
									</p>
									<input type="text" placeholder="First name" name="firstName" maxlength="20" value="">
									<small class="color-red"></small>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild last-name mb-30">
									<p>
										<label>Last name<span class="required">*</span></label>
									</p>
									<input type="text" placeholder="Last name" name="lastName" maxlength="20" value="">
									<small class="color-red"></small>
								</div>
								<div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6form-fild billing-city mb-30">
									<p>
										<label>Town / City<span class="required">*</span></label>
									</p>
									<input type="text" placeholder="Town / City" name="city" value="">
									<small class="color-red"></small>
								</div>
								<div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6form-fild billing-city mb-30">
									<p>
										<label>Region<span class="required">*</span></label>
									</p>
									<select name="region">
										<option value="">- select -</option>
										<option value="5f3b801420238542b09d61bd">Inside Dhaka</option>
										<option value="5f3b9d4920238542b09d9b17">Outside Dhaka</option>
									</select>
									<small class="color-red"></small>
								</div>
								<div class="col-12 col-sm-12 form-fild billing-address-1">
									<p>
										<label>Street address<span class="required">*</span></label>
									</p>
									<div class="row">
										<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-fild billing-address-2 mb-30">
											<input type="text" placeholder="House number and street name" name="streetAddress" value="">
											<small class="color-red"></small>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild billing-postcode mb-30">
									<p>
										<label>Postcode / ZIP<span class="required">*</span></label>
									</p>
									<input type="number" placeholder="Postcode / ZIP" name="postCode" value="">
									<small class="color-red"></small>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild country mb-30">
									<p>
										<label>Country<span class="required">*</span></label>
									</p>
									<select name="country" data-placeholder="Choose a Country..." class="chosen-select">
										<option data-value="Select a country…">Select a country…</option>
										<option data-value="Bangladesh" value="Bangladesh" selected="">Bangladesh</option>
									</select>
									<small class="color-red"></small>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild billing-phone mb-30">
									<p>
										<label>Phone<span class="required">*</span></label>
									</p>
									<input type="text" placeholder="01xxxxxxxxx" maxlength="11" name="phoneNumber" value="">
									<small class="color-red"></small>
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild email mb-30">
									<p>
										<label>Email<span class="required">*</span></label>
									</p>
									<input type="text" placeholder="Email" name="email" value="">
									<small class="color-red"></small>
								</div>
								<div class="col">
									<button type="submit" class="button-reverse pull-right btn btn-danger">Save</button>
								</div>
							</div>
						</form>
						<div class="pagination-bar">
							<div></div>
						</div>
					</div>
				</div>
				<div class="shipping-fields dev-flex-sb mb-10">
					<div class="ship-fild">
						<label class="ant-checkbox-wrapper">
							<span class="ant-checkbox">
								<input type="checkbox" class="ant-checkbox-input" id="chkPassport" value="">
								<span class="ant-checkbox-inner"></span>
							</span>
							<span>Bill to different address</span>
						</label>
					</div>
				</div>


				<form id="Shipping">
					<h4 class="small-title border-with-bottom-padding">Billing Details
						<small class="pull-right mr-10">
							<button>Back</button>
						</small>
					</h4>
					<div class="row billing-fields">
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild first-name mb-30">
							<p>
								<label>First name<span class="required">*</span></label>
							</p>
							<input type="text" placeholder="First name" name="firstName" maxlength="20" value="">
							<small class="color-red"></small>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild last-name mb-30">
							<p>
								<label>Last name<span class="required">*</span></label>
							</p>
							<input type="text" placeholder="Last name" name="lastName" maxlength="20" value="">
							<small class="color-red"></small>
						</div>
						<div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6form-fild billing-city mb-30">
							<p>
								<label>Town / City<span class="required">*</span></label>
							</p>
							<input type="text" placeholder="Town / City" name="city" value="">
							<small class="color-red"></small>
						</div>
						<div class=" col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6form-fild billing-city mb-30">
							<p>
								<label>Region<span class="required">*</span></label>
							</p>
							<select name="region">
								<option value="">- select -</option>
								<option value="5f3b801420238542b09d61bd">Inside Dhaka</option>
								<option value="5f3b9d4920238542b09d9b17">Outside Dhaka</option>
							</select>
							<small class="color-red"></small>
						</div>
						<div class="col-12 col-sm-12 form-fild billing-address-1">
							<p>
								<label>Street address<span class="required">*</span></label>
							</p>
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 form-fild billing-address-2 mb-30">
									<input type="text" placeholder="House number and street name" name="streetAddress" value="">
									<small class="color-red"></small>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild billing-postcode mb-30">
							<p>
								<label>Postcode / ZIP<span class="required">*</span></label>
							</p>
							<input type="number" placeholder="Postcode / ZIP" name="postCode" value="">
							<small class="color-red"></small>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild country mb-30">
							<p>
								<label>Country<span class="required">*</span></label>
							</p>
							<select name="country" data-placeholder="Choose a Country..." class="chosen-select">
								<option data-value="Select a country…">Select a country…</option>
								<option data-value="Bangladesh" value="Bangladesh" selected="">Bangladesh</option>
							</select>
							<small class="color-red"></small>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild billing-phone mb-30">
							<p>
								<label>Phone<span class="required">*</span></label>
							</p>
							<input type="text" placeholder="01xxxxxxxxx" maxlength="11" name="phoneNumber" value="">
							<small class="color-red"></small>
						</div>
						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 form-fild email mb-30">
							<p>
								<label>Email<span class="required">*</span></label>
							</p>
							<input type="text" placeholder="Email" name="email" value="">
							<small class="color-red"></small>
						</div>
						<div class="col">
							<button type="submit" class="button-reverse pull-right btn btn-danger">Save</button>
						</div>
					</div>
				</form>



				<div class="row dev-flex-l">
					<div class="mb-3 mt-3"><b>Select Region<span class="highlighted-txt required">*</span></b></div>
					<div class="mb-3">
						<select>
							<option value="">- select -</option>
							<option value="">Inside Dhaka</option>
							<option value="">Outside Dhaka</option>
						</select>
					</div>
				</div>
				<section class="cart-delete-all white-box-with-box-shadow mb-30 d-flex text-uppercase">
					<div class="select-all mb-5">Order Note</div>
					<textarea placeholder="Place order note if any" class="ant-input" style="height: 73px; min-height: 73px; max-height: 115px;"></textarea></section>
				<section class="cart-delete-all white-box-with-box-shadow d-flex text-uppercase">
					<div class="select-all">Selected 3 items</div>
				</section>

				<div style="padding-bottom: 15px;">
					<div>
						<h4 class="small-title"> # Order 1</h4>
					</div>
					<section class="shopwise-showcase white-box-with-box-shadow mb-30 cart-items">
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
										<td>
											<div class="price text-right">
												<span class="current-price">$
													<span class="currency"></span>113399
												</span>
												<span class="old-price">$
													<del><span class="currency"></span>161999</del>
												</span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>
				<div style="padding-bottom: 15px;">
					<div>
						<h4 class="small-title"> # Order 2</h4>
					</div>
					<section class="shopwise-showcase white-box-with-box-shadow mb-30 cart-items">
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
										<td>
											<div class="price text-right">
												<span class="current-price">$
													<span class="currency"></span>113399
												</span>
												<span class="old-price">$
													<del><span class="currency"></span>161999</del>
												</span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>
				<div style="padding-bottom: 15px;">
					<div>
						<h4 class="small-title"> # Order 3</h4>
					</div>
					<section class="shopwise-showcase white-box-with-box-shadow mb-30 cart-items">
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
										<td>
											<div class="price text-right">
												<span class="current-price">$
													<span class="currency"></span>113399
												</span>
												<span class="old-price">$
													<del><span class="currency"></span>161999</del>
												</span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
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
								<li  style="padding: 0px 0px 60px 0px;">
									<span class="value"><b>Note: </b> Shipping charges will be calculated based on the number of items, item type, weight and volume. 
										<a class="highlighted-txt" href="/" target="_blank">More info ...</a>
									</span>
								</li>
								<li class="cart-total-price">
									<label class="label">Total fee</label>
									<span class="value">
										<span class="currency">$</span>475</span>
									</li>
								</ul>
							</div>
							<div class="payment-methods white-box-with-box-shadow mb-30">
								<div class="cart-heading">
									<h5 class="text-uppercase mb-20">Delivery Options</h5>
								</div>
								<div class="ant-radio-group ant-radio-group-outline">
									<li>
										<label class="label dev-flex-sb">
											<label class="ant-radio-wrapper">
												<span class="ant-radio">
													<input type="radio" class="ant-radio-input" value="5fc4eeb60e3341cdff797769">
													<span class="ant-radio-inner"></span>
												</span>
												<span>Courier</span>
											</label>
											<img src="{{ asset('asset/fontend/asset/img/curier.png')}}">
										</label>
									</li>
									<li>
										<label class="label dev-flex-sb">
											<label class="ant-radio-wrapper ant-radio-wrapper-disabled">
												<span class="ant-radio ant-radio-disabled">
													<input type="radio" disabled="" class="ant-radio-input" value="5fc4eedb9ec422ce13fe6dd1">
													<span class="ant-radio-inner"></span>
												</span>
												<span>Store Pickup</span>
											</label>
											<img src="{{ asset('asset/fontend/asset/img/pickup.png')}}">
										</label>
									</li>
									<li>
										<label class="label dev-flex-sb">
											<label class="ant-radio-wrapper ant-radio-wrapper-disabled">
												<span class="ant-radio ant-radio-disabled">
													<input type="radio" disabled="" class="ant-radio-input" value="5fc4ef2f9ec422ce13fe73a3">
													<span class="ant-radio-inner"></span>
												</span>
												<span>ChabiKathi Fleet</span>
											</label>
											<img src="{{ asset('asset/fontend/asset/img/flat.png')}}">
										</label>
									</li>
								</div>
							</div>
							<div class="add-shop-content-field mt-15 ml-10">
								<div class="dev-flex-l">
									<label class="ant-checkbox-wrapper">
										<span class="ant-checkbox">
											<input type="checkbox" class="ant-checkbox-input" value="">
											<span class="ant-checkbox-inner"></span>
										</span>
									</label>
									<p class="m-0 ml-10">Please read and agree with our
										<a class="highlighted-txt" target="_blank" href="">Term &amp; Conditions</a>,
										<a class="highlighted-txt" target="_blank" href="./terms">Refund Policy</a>,
										<a class="highlighted-txt" target="_blank" href="./privacy">Privacy &amp; Policy
											<span class="required">*</span>
										</a>
									</p>
								</div>
							</div>
							<div class="place-order mb-30">
								<button class="place-order-button">Place order</button>
								<small class="highlighted-txt"></small>
							</div>
						</section>
		</div>
	</div>
	<!-- End Content Section -->
@endsection
@section('script')
<script type="text/javascript">
	$(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#Shipping").show();
            } else {
                $("#Shipping").hide();
            }
        });
    });
</script>
@endsection