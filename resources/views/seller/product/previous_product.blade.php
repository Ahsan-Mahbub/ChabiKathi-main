@extends('seller.layouts.app')
@section('content')
<style type="text/css">
	tr:hover{
		cursor: pointer;
	}
</style>
<div class="container">
	<div class="row">
	    <div class="col-md-6">
	        <!-- Static Labels -->
	        <div class="block">
	            <div class="block-header block-header-default">
	                <h3 class="block-title text-center">Previous Product - For Your Shop</h3>
	            </div>
	            <div class="block-content block-content-full">
			        <div class="">
			        	<table class="table table-bordered table-striped table-vcenter js-dataTable-full table-responsive">
				            <thead>
				                <tr>
				                    <th class="text-center">S/L</th>
				                    <th class="text-center"> Product Name</th>
				                    <th class="text-center"> Category</th>
				                    <th class="text-center"> Shop</th>
				                    <th class="text-center"> Price</th>
				                </tr>
				            </thead>
				            <tbody>
				                @php $sl = 1; @endphp
				                @foreach($products as $product)
				                <tr class="stock_product" data-id="{{$product}}">
				                    <td class="text-center">{{$sl++}}</td>
				                    <td class="font-w600 text-center">{{$product->product_name}}</td>
				                    <td class="text-center">{{$product->category? $product->category->category_name : 'null'}}</td>
				                    <td class="text-center">{{$product->shop? $product->shop->shop_name : 'null'}}</td>
				                    <td class="text-center">{{$product->price}}</td>
				                </tr>
				                @endforeach
				            </tbody>
				        </table>
			        </div>
			    </div>
	        </div>
	        <!-- END Static Labels -->
	    </div>
	    <div class="col-md-6">
	        <!-- Floating Labels -->
	        <div class="block">
		        <div class="block-header block-header-default">
		            <h3 class="block-title text-center"> Add Product</h3>
		            <div class="block-options">
		                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
		                    data-action-mode="demo">
		                    <i class="si si-refresh"></i>
		                </button>
		                <button type="button" class="btn-block-option" data-toggle="block-option"
		                    data-action="content_toggle"><i class="si si-arrow-up"></i></button>
		            </div>
		        </div>
		        <div class="block-content">
		            <div class="row justify-content-center py-20">
		                <div class="col-xl-12">
		                    <form role="form" action="{{route('seller.productprevious.store')}}" method="post"
		                        enctype="multipart/form-data">
		                        @csrf
		                        <input type="hidden" name="seller_id" value="{{auth('seller')->user()->id}}">
		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="text" class="form-control" id="product_name" name="product_name"
		                                    placeholder="Enter Product Name.." required="">
		                                @error('product_name')
		                                    <span class="text-danger">{{ $message }}</span>
		                                @enderror
		                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="text" class="form-control" id="product_slug" name="slug"
		                                    placeholder="Enter Product Slug.." required="">
		                                @error('slug')
		                                    <span class="text-danger">{{ $message }}</span>
		                                @enderror
		                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                            	<textarea name="product_desc" id="product_desc" class="form-control"></textarea>
		                            	@error('product_desc')
		                                    <span class="text-danger">{{ $message }}</span>
		                                @enderror
		                                <label for="editor">Product Details <span class="text-danger">*</span></label>
		                            </div>
		                        </div>


		                            <input class="form-control" id="category_id" name="category_id" required="" hidden="">
		                            <input class="form-control" id="subcategory_id" name="subcategory_id" hidden="">
		                            <input class="form-control" id="subsubcategory_id" name="subsubcategory_id" hidden="">
		                        

		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="number" class="form-control" id="totalprice" name="price"
		                                    placeholder="Enter Product Price.." required="">
		                                @error('price')
		                                    <span class="text-danger">{{ $message }}</span>
		                                @enderror
		                                <label for="totalprice">Product Price <span class="text-danger">*</span> </label>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="number" class="form-control" id="percentage" name="percentage"
		                                    placeholder="Enter Percentage Price..">
		                                <label for="Discount"> Percentage (%)</label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="number" class="form-control" id="discount" name="discount"
		                                    placeholder="Enter Discount Price..">
		                                <label for="discount">Discount Price</label>
		                            </div>
		                        </div>
		                        <div class="form-group">
	                                <div class="form-material">
	                                    <input type="number" id="afterdis" class="form-control" disabled="">
	                                    <input type="hidden" id="afterdishidden" name="discounted_price">
	                                    <label for="Discount">Discounted Price</label>
	                                </div>
                            	</div>

								<div class="form-group">
		                            <div class="form-material">
		                                <select class="form-control" id="shop_id" name="shop_id" required=""
		                                    onclick="getBrand()">
		                                    <option value="{{$shop->id}}">{{$shop->shop_name}} </option>
		                                </select>
		                                @error('shop_id')
		                                    <span class="text-danger">{{ $message }}</span>
		                                @enderror
		                                <label for="shop_id">Select Shop<span class="text-danger">*</span></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                                <select class="form-control" id="brand_id" name="brand_id">
		                                    <option value="0" selected="">Select Brand</option>
		                                </select>
		                                <label for="brand_id">Select Brand</label>
		                            </div>
		                        </div>


		                            <input class="form-control" id="product_img" name="product_img" hidden="">
		                            <input class="form-control" id="product_img_2" name="product_img_2" hidden="">
		                            <input class="form-control" id="product_img_3" name="product_img_3" hidden="">

		                        
		                        <div class="form-group">
		                            <button type="submit" class="btn btn-alt-primary">Submit</button>
		                        </div>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
	        <!-- END Floating Labels -->
	    </div>
	</div>
</div>
@endsection
@section('script')
<script src="{{ asset('asset/sitejs/product/previous_product.js')}}"></script>
@endsection