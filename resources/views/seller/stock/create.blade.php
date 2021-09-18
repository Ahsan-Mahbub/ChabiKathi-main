@extends('seller.layouts.app')
@section('content')
<div class="container">
	<div class="block">
	    <div class="block-header block-header-default">
	        <h3 class="block-title text-center"> Your Shop Product</h3>
	            <div class="block-options">
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
	                    <i class="si si-refresh"></i>
	                </button>
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
	            </div>
	    </div>
	</div>
</div>
<div class="container">
    <div class="col-md-12 row" id="product_filed">
        @foreach($products as $value)
        <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2 mr-4 mb-3 stock_product" data-id="{{$value}}" style="cursor: pointer;border: 3px solid #ddd;border-radius: 5px;">
            <div class="card text-center custom-card">
                <img width="130" height="120" style="padding: 8px;" src=/{{$value->product_img}}>
                <div class="card-body">
                    <h5>{{ $value->product_name  }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
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

	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    
	<div id="dynamic_field">
		
	</div>
	<div class="block">
	    <div class="block-header block-header-default">
	        <h3 class="block-title text-center"> Add Product Stock</h3>
	            <div class="block-options">
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
	                    <i class="si si-refresh"></i>
	                </button>
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
	            </div>
	    </div>
    	<form role="form" action="{{route('seller.stock.store')}}" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
            @csrf
	        <div class="block-content">
	            <div class="row items-push">
	            	<input type="hidden" value="{{auth('seller')->user()->id}}" id="seller_id" name="seller_id" required="">
	            	<input type="hidden" id="product_id" name="product_id" required="">
	                <div class="col-xl-6">
	                    <div class="form-group row">
	                        <label class="col-12" for="product_name">Product Name</label>
	                        <div class="col-lg-12">
	                            <input type="text" class="form-control" id="product_name" disabled="">
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6">
	                    <div class="form-group row">
	                        <label class="col-12" for="quantity">Product Quantity <span class="text-danger">*</span></label>
	                        <div class="col-lg-12">
	                            <input type="Number" name="quantity" class="form-control" id="quantity" placeholder="Enter Product Quantity" required="">
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6">
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
	                <div class="col-xl-6">
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
	                <div class="col-xl-6">
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
	                <div class="col-xl-6">
	                    <div class="form-group row mt-4">
	                    	<button type="submit" id="submit" class="btn btn-alt-primary">Submit</button>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </form>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$('.stock_product').click(function(){
		let product_info = $(this).data('id');

		let product_ids = product_info.id;
		let product_names = product_info.product_name;

		document.getElementById('product_id').value = product_ids;
		document.getElementById('product_name').value = product_names;
		toastr.success(" Product Selected", "Success");
	})
	function getSubCategory(){
        let id = $("#category_id").val();
        // alert(id);
        let url = '/admin/product/subcategory/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(element => {
                    html+='<option value='+element.id+'>'+element.sub_category_name+'</option>'
                });
                $("#subcategory_id").html(html);
            }
        });
    }

    function getProductList(){
        let id = $("#subcategory_id").val();
        // alert(id);
        let url = '/admin/stock/productlist/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(value => {
                	console.log(value);
                    $('#product_filed').append(
		               `
		               <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2 mr-4 mb-3 stock_product" data-id="+value+" style="cursor: pointer;border: 3px solid #ddd;border-radius: 5px;">
					            <div class="card text-center custom-card">
					                <img width="130" height="120" style="padding: 8px;" src=/${value.product_img}>
					                <div class="card-body">
					                    <h5>${value.product_name}</h5>
					                </div>
					            </div>
					        </div>
		               `);
                });
                // $("#product").html(html);
            }
        });
    }
</script>
<script type="text/javascript">
	function validateForm() {
		var x = document.forms["myForm"]["product_id"].value;
		if (x == "") {
		    $('#dynamic_field').append(
               `
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Plese Select Product...</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
               `);
		    return false;
		}
	}
</script>
@endsection