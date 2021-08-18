@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Add Product</h3>
            <div class="block-options">
            	<a href="{{route('product.list')}}">
            		<i class="si si-list"></i>
            	</a>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
            </div>
        </div>
        <div class="block-content">
            <div class="row justify-content-center py-20">
                <div class="col-xl-12">
                    <form role="form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name.." required="">
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20" class="form-control"></textarea>
                                <label for="editor">Product Details <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                            	@php($category = \App\Models\Category::where('status',1)->orderBy('id','desc')->get())
                            	@foreach($category as $value)
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="cat_id[]" id="{{$value->category_name}}" value="{{$value->id}}">
                                    <label class="custom-control-label" for="{{$value->category_name}}">{{$value->category_name}}</label>
                                </div>
                                @endforeach
                                <label class="col-12" for="cat">Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                            	@php($subcategory = \App\Models\SubCategory::where('status',1)->orderBy('id','desc')->get())
                            	@foreach($subcategory as $value)
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="sub_cat_id[]" id="{{$value->sub_category_name}}" value="{{$value->id}}">
                                    <label class="custom-control-label" for="{{$value->sub_category_name}}">{{$value->sub_category_name}}</label>
                                </div>
                                @endforeach
                                <label class="col-12">Sub Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="cat_priority" name="price" placeholder="Enter Product Price.." required="">
                                <label for="cat_priority">Product Price <span class="text-danger">*</span> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="Discount" name="discount" placeholder="Enter Discount Price..">
                                <label for="Discount">Discount Price</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity..">
                                <label for="quantity">Quantity</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="shop" name="shop" placeholder="Enter Shop Name..">
                                <label for="shop">Shop Name</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="band" name="band" placeholder="Enter Band Name..">
                                <label for="band">Band Name</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection