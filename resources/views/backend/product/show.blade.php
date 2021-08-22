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
                <div class="form-group row">
                    <div class="col-12">
                        <div class="form-material">
                            <input value="{{$product->product_name}}" class="form-control" disabled="">
                            <label for="login2-username">Productt Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <input value="{{$product->product_name}}" class="form-control" disabled="">
                            <label for="login2-username">Category Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <input value="{{$product->product_name}}" class="form-control" disabled="">
                            <label for="login2-username">Sub-Category Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material" style="height: auto;">
                                {!! $product->product_desc !!}
                            <label for="login2-username">Product Details</label>
                        </div>
                    </div>
                </div><div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->price}}</textarea>
                            <label for="login2-username">Product Price</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->discount}}</textarea>
                            <label for="login2-username">Discount Price</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->quantity}}</textarea>
                            <label for="login2-username">Product Quantity</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->brand}}</textarea>
                            <label for="login2-username">Band Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->shop}}</textarea>
                            <label for="login2-username">Shop Name</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                	<div class="col-12">
                        <div class="form-material">
                            <textarea disabled="" class="form-control">{{$product->sku}}</textarea>
                            <label for="login2-username">SKU</label>
                        </div>
                    </div>
                </div>
                <label for="login2-username">Main Image</label>
                <a href="{{$product->product_img==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img}}" alt="">
	            </a>
	            <label for="login2-username">Secendary Image</label>
                <a href="{{$product->product_img_2==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_2}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img_2==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_2}}" alt="">
	            </a>
                <label for="login2-username">Optional Image</label>
                <a href="{{$product->product_img_3==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_3}}">
	                <img style="height: 200px; padding: 10px;" src="{{$product->product_img_3==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.$product->product_img_3}}" alt="">
	            </a><br>
            </form>
        </div>
    </div>
    <!-- END Material Login -->
</div>
@endsection