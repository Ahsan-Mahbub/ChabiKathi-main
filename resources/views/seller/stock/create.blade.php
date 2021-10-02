@extends('seller.layouts.app')
@section('content')
<style type="text/css">
	.block{
		margin-bottom: 0;
	}
</style>
<div class="container">
	<div class="block">

	    <div class="block-header block-header-default">
	        <h3 class="block-title text-center"> Your Shop Product</h3>
	            <div class="block-options">
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
	                    <i class="si si-refresh"></i>
	                </button>
	            </div>
	    </div>
	    <div style="height: 610px; overflow-y: scroll;">
	    	<div class="container mt-4 mb-4">
	    	<div class="row">
	            @foreach($products as $value)
	            <div class="col-md-4 col-xl-3 stock_product mb-2" data-id="{{$value}}" style="cursor: pointer;">
	                <a class="block block-link-shadow">
	                    <div class="block-content block-content-full text-center">
	                        <div class="p-5 mb-5">
	                            <img width="130" height="120" src=/{{$value->product_img}}>
	                        </div>
	                        <p class="font-size-lg font-w600 mb-0">
	                            Product Name: {{ $value->product_name  }}
	                        </p>
	                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
	                            Sell Price: {{ $value->price  }}
	                        </p>
	                        <p class="font-size-sm text-uppercase font-w600 text-muted mb-0">
	                            Product Slug: {{ $value->slug  }}
	                        </p>
	                    </div>
	                </a>
	            </div>
	            @endforeach
	        </div>
	    	</div>
	    </div>
	</div>
</div>

<div class="container">
    <section class="pagination mb-15">
        <div class="container nav-content">
        </div>
    </section>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <strong>First Select Product, Then submit Stock. Otherwise don't submit.</strong>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>

	<div class="block">
	    <div class="block-header block-header-default">
	        <h3 class="block-title text-center"> Add Product Stock</h3>
	            <div class="block-options">
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
	                    <i class="si si-refresh"></i>
	                </button>
	            </div>
	    </div>
    	<form role="form" action="{{route('seller.stock.store')}}" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
            @csrf
	        <div class="block-content">
	            <div class="row items-push">
	            	<input type="hidden" value="{{auth('seller')->user()->id}}" id="seller_id" name="seller_id" required="">
	            	<input type="hidden" id="product_id" name="product_id" required="">
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="product_name">Product Name</label>
	                        <div class="col-lg-12">
	                            <input type="text" class="form-control" id="product_name" disabled="">
	                        </div>
	                        @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="slug">Product Slug</label>
	                        <div class="col-lg-12">
	                            <input type="text" class="form-control" id="slug" disabled="">
	                        </div>
	                        @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="sell_price">Sell Price</label>
	                        <div class="col-lg-12">
	                            <input type="text" class="form-control" id="sell_price" disabled="">
	                            <input type="hidden" class="form-control" id="sell_price_dis" name="sell_price">
	                        </div>
	                        @error('sell_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="perches_price">Purches Price<span class="text-danger">*</span></label>
	                        <div class="col-lg-12">
	                            <input type="number" name="perches_price" class="form-control" id="perches_price" placeholder="Enter Product Quantity" required="">
	                        </div>
	                        @error('perches_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="perches_code">Purches Code<span class="text-danger">*</span></label>
	                        <div class="col-lg-12">
	                            <input type="text" name="perches_code" class="form-control" id="perches_code" placeholder="Enter Purches Code" required="">
	                        </div>
	                        @error('perches_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>
	                <div class="col-xl-4">
	                    <div class="form-group row">
	                        <label class="col-12" for="quantity">Product Quantity <span class="text-danger">*</span></label>
	                        <div class="col-lg-12">
	                            <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter Product Quantity" required="">
	                        </div>
	                        @error('quantity')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
	                    </div>
	                </div>

	                <div class="col-xl-12">
	                	<div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="colorRadio" id="example-inline-radio1" value="red">
                                    <label class="custom-control-label" for="example-inline-radio1">Product (Color / Size)</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="colorRadio" id="example-inline-radio2" value="green">
                                    <label class="custom-control-label" for="example-inline-radio2">Product (Weight)</label>
                                </div>
                            </div>
                        </div>
	                </div>
	                <div class="red box col-xl-12">
	                	<div class="col-xl-6" style="display: inline; float: left;">
		                    <div class="form-group row">
		                        <label class="col-12" for="color_id">Color</label>
		                        <div class="col-lg-12">
		                            <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="color_id" name="color_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="color_id" tabindex="-1" aria-hidden="true">
		                            	<option disabled="" selected="">Select Color</option>
		                            	@php($color = \App\Models\Color::where('status',1)->orderBy('id','desc')->get())
		                            	@foreach($color as $value)
		                                <option value="{{$value->id}}">{{$value->color_name}}</option>
		                                @endforeach
		                            </select>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-xl-6" style="display: inline; float: right;">
		                    <div class="form-group row">
		                        <label class="col-12" for="size_id">Size</label>
		                        <div class="col-lg-12">
		                            <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="size_id" name="size_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="size_id" tabindex="-1" aria-hidden="true">
		                                <option disabled="" selected=""> Select Size</option>
		                                @php($size = \App\Models\Size::where('status',1)->orderBy('id','desc')->get())
		                            	@foreach($size as $value)
		                                <option value="{{$value->id}}">{{$value->size_name}}</option>
		                                @endforeach
		                            </select>
		                        </div>
		                    </div>
		                </div>

		            </div>

		            <div class="green box col-xl-12">
		                <div class="col-xl-6" style="display: inline; float: left;">
		                    <div class="form-group row">
		                        <label class="col-12" for="weight_id">Weight</label>
		                        <div class="col-lg-12">
		                            <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="weight_id" name="weight_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="weight_id" tabindex="-1" aria-hidden="true">
		                                <option disabled="" selected=""> Select Weight</option>
		                                @php($weight = \App\Models\Weight::where('status',1)->orderBy('id','desc')->get())
		                            	@foreach($weight as $value)
		                                <option value="{{$value->id}}">{{$value->weight_name}}</option>
		                                @endforeach
		                            </select>
		                        </div>
		                    </div>
		                </div>
		            </div>
	                    <div class="form-group pl-10">
	                    	<button type="submit" id="submit" class="btn btn-alt-primary">Submit</button>
	                    </div>
	            </div>
	        </div>
	    </form>
	</div>
</div>
@endsection
@section('script')
<script>
$(".box").hide();
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
<script type="text/javascript">
	$('.stock_product').click(function(){
		let product_info = $(this).data('id');
		let product_ids = product_info.id;
		let product_names = product_info.product_name;
		let slugs = product_info.slug;
		let sell_price = product_info.price;
		let sell_price_dis = product_info.price;

		document.getElementById('product_id').value = product_ids;
		document.getElementById('product_name').value = product_names;
		document.getElementById('slug').value = slugs;
		document.getElementById('sell_price').value = sell_price;
		document.getElementById('sell_price_dis').value = sell_price_dis;
		toastr.success(" Product Selected", "Success");
	})
</script>
<script type="text/javascript">
	function validateForm() {
		var x = document.forms["myForm"]["product_id"].value;
		if (x == "") {
		    toastr.warning(" Please Select Product", "Damage");
		    return false;
		}
	}
</script>
<script type="text/javascript">
$("#perches_price").keyup(function(){
    var Text = $(this).val();
    let random = (Math.random() + 1).toString(36).substring(7);
    Text = 'perches'+'-'+Text.toLowerCase()+random;
    $("#perches_code").val(Text); 

    var v = $(this).val();
	    if(v.length == 0 && v == '') {
	        $('#perches_code').val('');
	    } 
});
</script>
@endsection