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
					<h2>{{$category->category_name ?? ''}} {{ $subcategory->sub_category_name ?? ''}} {{$shop->shop_name ?? ''}}</h2>
					<div class="showing-more">
						<!-- <span class="show-result">Showing 1-18of 1422 results</span> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						@foreach($product as $data)
						<div class="col-md-2 product-box cat-box">
							<a href="/product/{{$data->product_slug}}">
								<div class="product-img">
									<img src="/{{$data->product_img}}">
								</div>
								<span class="product-name">{{$data->product_name}}</span>


								<?php
				                  if($data->discount)
				                  {
				                    $main_price= $data->price;
				                    $discount_price= $data->discount;
				                    $total_price= $main_price-$discount_price;
				                    ?>
				                    <div class="text-center con-price">
				                      <span class="present-price">৳ {{$total_price}}</span>
				                      <span class="previous-price">৳ {{$data->price}}</span>
				                    </div>
				                    <?php
				                  }else{
				                    ?>
				                    <span class="present-price">৳ {{$data->price}}</span>
				                    <?php
				                  }
				                ?>


								<?php
					                if ($data->percentage) {
					                  ?>
					                  <span class="discount-tag-in-percent">- {{$data->percentage}}% OFF</span>
					                  <?php
					                }
					              ?>
					              <small class="in-stock">Stock Available</small>

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
    <!--End Pagination Section -->
@endsection