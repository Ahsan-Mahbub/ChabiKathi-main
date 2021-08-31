@extends('seller.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Product</h3>
            <div class="block-options">
                <a href="{{route('product.list')}}">
                    <i class="si si-list"></i>
                </a>
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
                    <form role="form" action="{{route('product.update',$product->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_name"
                                    value="{{$product->product_name}}" name="product_name"
                                    placeholder="Enter Product Name.." required="">
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_slug"
                                    value="{{$product->product_slug}}" name="product_slug"
                                    placeholder="Enter Product Slug.." required="">
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20"
                                    class="form-control">{{$product->product_desc}}</textarea>
                                <label for="editor">Product Details <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="example-select" name="cat_id">
                                    <option disabled="">Select Category</option>
                                    @php($category =
                                    \App\Models\Category::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}"
                                        {{ $product->cat_id == $value->id ? 'selected' : ''}}>{{$value->category_name}}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="example-select">Select Category<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="sub_cat_id" name="sub_cat_id">
                                    <option value="null">Select Sub Category</option>
                                </select>
                                <label for="sub_cat_id">Select Sub Category</label>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="example-select" name="size_id">
                                    <option value="0">Select Size</option>
                                    @php($category = \App\Models\Size::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}"
                                        {{ $product->size_id == $value->id ? 'selected' : ''}}>{{$value->size_name}}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="example-select">Select Size</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="example-select" name="weight_id">
                                    <option value="0">Select Weight</option>
                                    @php($category = \App\Models\Weight::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}"
                                        {{ $product->weight_id == $value->id ? 'selected' : ''}}>{{$value->weight_name}}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="example-select">Select Weight</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    @php($category = \App\Models\Color::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($category as $value)
                                    <div class="col-md-12">
                                        <input class="custom-control-input" type="radio" name="color_id"
                                            id="{{$value->color_code}}" value="{{$value->id}}"
                                            {{ $product->color_id == $value->id ? 'checked' : ''}}>
                                        <label class="custom-control-label"
                                            for="{{$value->color_code}}">{{$value->color_code}}</label>
                                        <div
                                            style="height: 20px; width: 20px;border-radius: 50%; margin-right: 10px; border: 1px solid #ddd;background-color: {{$value->color_code}}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <label>Select Color</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="cat_priority" value="{{$product->price}}"
                                    name="price" placeholder="Enter Product Price.." required="">
                                <label for="cat_priority">Product Price <span class="text-danger">*</span> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="Discount" value="{{$product->discount}}"
                                    name="discount" placeholder="Enter Discount Price..">
                                <label for="Discount">Discount Price</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="quantity" value="{{$product->quantity}}"
                                    name="quantity" placeholder="Enter Quantity..">
                                <label for="quantity">Quantity</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="example-select" name="weight_id">
                                    <option value="0">Select Brand</option>
                                    @php($brand = \App\Models\Brand::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($brand as $value)
                                    <option value="{{$value->id}}"
                                        {{ $product->brand_id == $value->id ? 'selected' : ''}}>{{$value->brand_name}}
                                    </option>
                                    @endforeach
                                </select>
                                <label for="example-select">Select Weight</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="shop" value="{{$product->shop}}" name="shop"
                                    placeholder="Enter Shop Name..">
                                <label for="shop">Shop Name</label>
                            </div>
                        </div>

                        <label>Main Image <span class="text-danger">*</span></label>
                        <input type='file' name="product_img" value="{{$product->product_img}}" required=""
                            onchange="readURL(this);" />
                        <img id="blah"
                            src="{{$product->product_img ? '/' . $product->product_img :  '/asset/backend/assets/media/photos/image.png'}}"
                            height="200" width="200" alt="your image" /><br>

                        <label>Secendary Image</label>
                        <input type='file' name="product_img_2" value="{{$product->product_img_2}}"
                            onchange="readURL2(this);" />
                        <img id="blah2"
                            src="{{$product->product_img_2 ? '/' . $product->product_img_2 :  '/asset/backend/assets/media/photos/image.png'}}"
                            height="200" width="200" alt="your image" /><br>

                        <label>Optional Image</label>
                        <input type='file' name="product_img_3" value="{{$product->product_img_3}}"
                            onchange="readURL3(this);" />
                        <img id="blah3"
                            src="{{$product->product_img_3 ? '/' . $product->product_img_3 :  '/asset/backend/assets/media/photos/image.png'}}"
                            height="200" width="200" alt="your image" /><br>


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
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah3')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<script type="text/javascript">
    $("#product_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#product_slug").val(Text);        
});
</script>
@endsection