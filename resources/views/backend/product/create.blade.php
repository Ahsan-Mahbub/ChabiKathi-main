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
                                @error('product_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_slug" name="slug" placeholder="Enter Product Slug.." required="">
                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20" class="form-control" required=""></textarea>
                                @error('product_desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="editor">Product Details <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="category_id" name="category_id" onclick="getSubCategory()">
                                    <option disabled="" selected="">Select Category</option>
                                    @foreach($category as $value)
                                        <option value="{{$value->id}}">{{$value->category_name}} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="category_id">Select Category<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="subcategory_id" name="subcategory_id" onclick="getSubSubCategory()">
                                    <option value="0">Select</option>
                                </select>
                                <label for="subcategory_id">Select Sub Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="subsubcategory_id" name="subsubcategory_id">
                                    <option value="0">Select</option>
                                </select>
                                <label for="subsubcategory_id">Select Sub Sub Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="totalprice" name="price" placeholder="Enter Product Price.." required="">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="totalprice">Product Main Price <span class="text-danger">*</span> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="checkbox" id="percentage-box">
                                <label for="Discount">Use Prcentage?</label>
                            </div>
                        </div>
                        <div id="percentage_price">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="number" class="form-control" id="percentage" name="percentage"
                                        placeholder="Enter Percentage Price..">
                                    <label for="percentage-box"> Percentage (%)</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="disval" name="discount"
                                    placeholder="Enter Discount Price..">
                                <label for="afterdis">Discount Price</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" id="afterdis" class="form-control" disabled="">
                                <input type="hidden" id="afterdisval" class="form-control" name="discounted_price" readonly="">
                                <label for="Discount">Discounted Price</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="shop_id" name="shop_id" required="" onclick="getBrand()">
                                    <option value="0" selected="">Select Shop</option>
                                    @foreach($shop as $value)
                                        <option value="{{$value->id}}">{{$value->shop_name}} </option>
                                    @endforeach
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

                        <div class="form-group row">
                            <label class="col-12">Is Veriation ?</label>
                            <div class="col-12">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="is_veriation" id="example-inline-radio1" value="1">
                                    <label class="custom-control-label" for="example-inline-radio1">Has Veriation?</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="is_veriation" id="example-inline-radio2" value="0">
                                    <label class="custom-control-label" for="example-inline-radio2">No Veriation</label>
                                </div>
                            </div>
                        </div>

                        <label>Main Image <span class="text-danger">*</span></label>
                        <input type='file' name="product_img" required="" onchange="readURL(this);" />
                        <img id="blah" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200" width="200" alt="your image" /><br>
                        @error('product_img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <label>Secendary Image</label>
                        <input type='file' name="product_img_2" onchange="readURL2(this);" />
                        <img id="blah2" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200" width="200" alt="your image" /><br>

                        <label>Optional Image</label>
                        <input type='file' name="product_img_3" onchange="readURL3(this);" />
                        <img id="blah3" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200" width="200" alt="your image" /><br>
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
@section('script')
<script src="{{ asset('asset/sitejs/product/price_calculate.js')}}"></script>
<script src="{{ asset('asset/sitejs/product/product.js')}}"></script>
@endsection