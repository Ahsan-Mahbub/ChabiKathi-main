@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Product</h3>
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
                    <form role="form" action="{{route('product.update',$product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_name" value="{{$product->product_name}}" name="product_name" placeholder="Enter Product Name.." required="">
                                @error('product_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_slug" value="{{$product->slug}}" name="slug" placeholder="Enter Product Slug.." required="">
                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20" class="form-control" required="">{{$product->product_desc}}</textarea>
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
                                        <option value="{{$value->id}}" {{ $product->category_id == $value->id ? 'selected' : ''}}>{{$value->category_name}} </option>
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
                                    <option disabled="" selected="">Select Sub Category</option>
                                    @foreach($subcategory as $value)
                                        <option value="{{$value->id}}" {{ $product->subcategory_id == $value->id ? 'selected' : ''}}>{{$value->sub_category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="category_id">Select Sub Category<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="subsubcategory_id" name="subsubcategory_id" onclick="getChildCategory()">
                                    <option value="">Select</option>
                                </select>
                                <label for="subsubcategory_id">Select Sub Sub Category</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="child_category_id" name="child_category_id" onclick="getGrandChildCategory()">
                                    <option value="">Select</option>
                                </select>
                                <label for="child_category_id">Select Child Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="grand_child_category_id" name="grand_child_category_id">
                                    <option value="">Select</option>
                                </select>
                                <label for="grand_child_category_id">Select Grand Child Category</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="totalprice" name="price" placeholder="Enter Product Price.." required="" value="{{$product->price}}">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="totalprice">Product Main Price <span class="text-danger">*</span> </label>
                            </div>
                        </div>
                        <div id="percentage_price">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="number" class="form-control" id="percentage" name="percentage" value="{{$product->percentage}}" placeholder="Enter Percentage Price..">
                                    <label for="Discount"> Percentage (%)</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="disval" name="discount"
                                    placeholder="Enter Discount Price.." value="{{$product->discount}}">
                                <label for="afterdis">Discount Price</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" id="afterdis" class="form-control" disabled="" value="{{$product->discounted_price}}">
                                <input type="hidden" id="afterdisval" class="form-control" value="{{$product->discounted_price}}" name="discounted_price" readonly="">
                                <label for="Discount">Discounted Price</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="shop_id" name="shop_id" required="" onclick="getBrand()">
                                    <option value="" selected="">Select Shop</option>
                                    @foreach($shop as $value)
                                        <option value="{{$value->id}}" {{ $product->shop_id == $value->id ? 'selected' : ''}}>{{$value->shop_name}} </option>
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
                                    <option value="" selected="">Select Brand</option>
                                </select>
                                <label for="brand_id">Select Brand</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12">Is Veriation ?</label>
                            <div class="col-12">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="is_veriation" id="example-inline-radio1" value="1" {{($product->is_veriation == 1 ? ' checked' : '')}}>
                                    <label class="custom-control-label" for="example-inline-radio1">Has Veriation?</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    <input class="custom-control-input" type="radio" name="is_veriation" id="example-inline-radio2" value="0" {{($product->is_veriation == 0 ? ' checked' : '')}}>
                                    <label class="custom-control-label" for="example-inline-radio2">No Veriation</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" value="{{$product->video_url}}" class="form-control" name="video_url" 
                                    placeholder="Enter Video URL..">
                                <label>Video URL </label>
                            </div>
                        </div>

                        <label>Main Image <span class="text-danger">*</span></label>
                        <input type='file' name="product_img" value="{{$product->product_img}}" onchange="readURL(this);" />
                        <img id="blah" src="{{$product->product_img ? '/' . $product->product_img :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="200" alt="your image" /><br>
                        @error('product_img')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <label>Secendary Image</label>
                        <input type='file' name="product_img_2" value="{{$product->product_img_2}}" onchange="readURL2(this);" />
                        <img id="blah2" src="{{$product->product_img_2 ? '/' . $product->product_img_2 :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="200" alt="your image" /><br>

                        <label>Optional Image</label>
                        <input type='file' name="product_img_3" value="{{$product->product_img_3}}" onchange="readURL3(this);" />
                        <img id="blah3" src="{{$product->product_img_3 ? '/' . $product->product_img_3 :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="200" alt="your image" /><br>

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
<script src="{{ asset('asset/sitejs/product/product_edit.js')}}"></script>
@endsection