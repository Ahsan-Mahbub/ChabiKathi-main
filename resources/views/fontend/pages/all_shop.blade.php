@section('css')
	<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
    <link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/vendor.css')}}" />
    <style type="text/css">
		.page-item.active .page-link {
		    background-color: #7d2227;
		    border-color: #7d2227;
		}
	</style>
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
							<h2>All Shop</h2>
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
			</div>
		</div>
	</section>
	<section class="product-part">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						@foreach($shops as $data)
						<div class="col-md-2 product-box shop-box">
							<a href="/shop/{{$data->slug}}">
								<div class="product-img">
									<img src="/{{$data->image}}">
								</div>
								<span class="product-name">{{$data->shop_name}}</span>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- <section>
			<div class="container">
				<div class="col-md-12 text-center shop-view">
					<button class="btn btn-light">View More</button>
				</div>
			</div>
		</section> -->
		<section class="pagination mb-15">
			<div class="container nav-content">
				{{ $shops->links() }}
			</div>
	    </section>
	<!-- End Shop Section -->
@endsection