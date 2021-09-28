@extends('backend.layouts.app')
@section('content')
<div class="col-md-12">
    <!-- Material Login -->
    <div class="block block-themed">
        <div class="block-header bg-gd-dusk">
            <h3 class="block-title text-center">{{$product->product_name}} Details</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
            </div>
        </div>
        <div class="block-content">
            <form>
                <div class="form-group">
                    <div class="col-md-6 col-12" style="display:inline-block;">
                        <div class="form-material">
                            <input value="{{$product->product_name}}" class="form-control" disabled="">
                            <label for="login2-username">Product Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="float: right;">
                        <div class="form-material">
                            <input value="{{$product->slug}}" class="form-control" disabled="">
                            <label for="login2-username">Product Slug</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                	<div class="col-md-6 col-12" style="display:inline-block;">
                        <div class="form-material">
                            <input value="{{$product->category? $product->category->category_name : 'null'}}" class="form-control" disabled="">
                            <label for="login2-username">Category Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="float: right;">
                        <div class="form-material">
                            <input value="{{$product->subcategory? $product->subcategory->sub_category_name : 'null'}}" class="form-control" disabled="">
                            <label for="login2-username">Sub-Category Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-12">
                        <div class="form-material">
                            <input value="{{$product->subsubcategory? $product->subsubcategory->sub_sub_category_name : 'null'}}" class="form-control" disabled="">
                            <label for="login2-username">Sub Sub Category Name</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                	<div class="col-12">
                        <div class="form-material">
                            <div class="form-control" style="height: auto;">
                                {!! $product->product_desc !!}
                            </div>
                            <label for="login2-username">Product Details</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                	<div class="col-md-6 col-12" style="display:inline-block;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="৳{{$product->price}}">
                            <label for="login2-username">Product Sell Price</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="float: right;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="{{$product->percentage? $product->percentage : '0'}} %">
                            <label for="login2-username">Percentage</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-12" style="display:inline-block;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="৳{{$product->discount? $product->discount : '0'}}">
                            <label for="login2-username">Discount Price</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-12" style="float: right;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="৳{{$product->discounted_price? $product->discounted_price : '0'}}">
                            <label for="login2-username">After Discount Price</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-12" style="float: right;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="{{$product->sku}}">
                            <label for="login2-username">SKU</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-12" style="display:inline-block;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="{{$product->shop? $product->shop->shop_name : 'null'}}">
                            <label for="login2-username">Shop Name</label>
                        </div>
                    </div>
                	<div class="col-md-6 col-12" style="float: right;">
                        <div class="form-material">
                            <input disabled="" class="form-control" value="{{$product->brand? $product->brand->brand_name : 'null'}}">
                            <label for="login2-username">Brand Name</label>
                        </div>
                    </div>
                </div>
                <label for="login2-username">Main Image</label>
                <a href="{{$product->product_img==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img}}" alt="">
	            </a><br>
	            <label for="login2-username">Secendary Image</label>
                <a href="{{$product->product_img_2==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_2}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img_2==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_2}}" alt="">
	            </a><br>
                <label for="login2-username">Optional Image</label>
                <a href="{{$product->product_img_3==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_3}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img_3==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_3}}" alt="">
	            </a><br>
            </form>
        </div>
    </div>
</div>
@endsection