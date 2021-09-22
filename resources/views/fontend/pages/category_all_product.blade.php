@section('css')
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/style.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/product.css')}}" />
<link rel="stylesheet" href="{{ asset('asset/fontend/asset/css/category_product.css')}}" />
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
	<!-- Upper Title Section -->
	<section class="upper-title-section">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 breadcrumbs">
					<ul class="page-breadcrumbs">
						<li><a title="Home" href="/">Home</a>
							<span class="breadcome-separator">&gt;</span>
						</li>
						<li>{{$category->category_name ?? ''}} {{ $subcategory->sub_category_name ?? ''}} {{ $shop->shop_name ?? ''}}</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End Upper Title Section -->

	<!-- Related Product Section -->
	<section class="product-part">
			<div class="container">
					<div class="product-title dev-flex-sb">
						<a href=""><h2>{{$category->category_name ?? ''}} {{ $subcategory->sub_category_name ?? ''}} {{$shop->shop_name ?? ''}}</h2></a>
						<div class="showing-more">
							<!-- <span class="show-result">Showing 1-18of 1422 results</span> -->
					</div>
					</div>
				<div class="row">
					<div class="col-md-12">
						@foreach($product as $data)
						<div class="col-md-2 product-box">
							<a href="/product/{{$data->product_slug}}">
								<div class="product-img">
									<img src="/{{$data->product_img}}">
								</div>
								<span class="product-name">{{$data->product_name}}</span>
								<span class="previous-price">
									<?php
										if($data->discount)
										{
											echo "৳ {$data->discount}";
										}
									?>
								</span>
								<?php
									$main_price= $data->price;
									$discount_price= $data->discount;
									$total_price= $main_price-$discount_price;
								?>
								<span class="present-price">৳ {{$total_price}}</span>
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
		
	<!-- End Related Product Section -->
	<!-- Pagination Section -->
	<section class="pagination mb-15">
		<div class="container nav-content">
			{{ $product->links() }}
		</div>
    </section>

	<!-- <section class="pagination mb-15">
		<div class="container nav-content">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link active" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
    </section> -->
	<!-- End Pagination Section -->
@endsection