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
                                <input type="text" class="form-control" id="product_slug" name="product_slug" placeholder="Enter Product Slug.." required="">
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
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
                                <select class="form-control" id="category_id" name="category_id" onclick="getSubCategory()">
                                    <option disabled="" selected="">Select Category</option>
                                    @foreach($category as $value)
                                        <option value="{{$value->id}}">{{$value->category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="category_id">Select Category<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="subcategory_id" name="subcategory_id">
                                    <option value="0">Select</option>
                                </select>
                                <label for="subcategory_id">Select Sub Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="example-select" name="size_id">
                                    <option value="0">Select Size</option>
                                    @php($category = \App\Models\Size::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($category as $value)
                                        <option value="{{$value->id}}">{{$value->size_name}} </option>
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
                                        <option value="{{$value->id}}">{{$value->weight_name}} </option>
                                    @endforeach
                                </select>
                                <label for="example-select">Select Weight</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <div class="custom-control custom-radio custom-control-inline mb-5">
                                    @php($color = \App\Models\Color::where('status',1)->orderBy('id','desc')->get())
                                    @foreach($color as $value)
                                        <div class="col-md-12">
                                            <input class="custom-control-input" type="radio" name="color_id" id="{{$value->color_code}}" value="{{$value->id}}">
                                            <label class="custom-control-label" for="{{$value->color_code}}">{{$value->color_code}}</label><div style="height: 20px; width: 20px;border-radius: 50%; margin-right: 10px; border: 1px solid #ddd;background-color: {{$value->color_code}}"></div>
                                        </div>
                                    @endforeach
                                </div>
                                <label>Select Color</label>
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
                                <select class="form-control" id="brand_id" name="brand_id">
                                    <option value="0" selected="">Select Brand</option>
                                    @foreach($brand as $value)
                                        <option value="{{$value->id}}">{{$value->brand_name}} </option>
                                    @endforeach
                                </select>
                                <label for="brand_id">Select Brand</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="shop_id" name="shop_id"  onclick="getShop()">
                                    <option value="0" selected="">Select Shop</option>
                                </select>
                                <label for="shop_id">Select Shop</label>
                            </div>
                        </div>

                        <label>Main Image <span class="text-danger">*</span></label>
                        <input type='file' name="product_img" required="" onchange="readURL(this);" />
                        <img id="blah" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200" width="200" alt="your image" /><br>

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
<script type="text/javascript">
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

    function getShop(){
        let id = $("#brand_id").val();
        // alert(id);
        let url = '/admin/product/shop/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(element => {
                    html+='<option value='+element.id+'>'+element.shop_name+'</option>'
                });
                $("#shop_id").html(html);
            }
        });
    }
</script>
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