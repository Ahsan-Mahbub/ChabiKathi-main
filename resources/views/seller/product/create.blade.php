@extends('seller.layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Add Product</h3>
            <div class="block-options">
                <a href="{{route('seller.product.list')}}">
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
                    <form role="form" action="{{route('seller.product.store')}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="seller_id" value="{{auth('seller')->user()->id}}">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Enter Product Name.." required="">
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_slug" name="product_slug"
                                    placeholder="Enter Product Slug.." required="">
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20"
                                    class="form-control"></textarea>
                                <label for="editor">Product Details <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="category_id" name="category_id"
                                    onclick="getSubCategory()">
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
                                <label for="subsubcategory_id">Select Sub Category</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" id="totalprice" name="price"
                                    placeholder="Enter Product Price.." required="">
                                <label for="totalprice">Product Price <span class="text-danger">*</span> </label>
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
                                    <label for="Discount"> Percentage (%)</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-material">
                                    <input type="number" id="afterdis" class="form-control" disabled="">
                                    <label for="Discount">After Percentage Total Price</label>
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
                                <select class="form-control" id="shop_id" name="shop_id" required=""
                                    onclick="getBrand()">
                                    <option selected="">Select Shop</option>
                                    <option value="{{$shop->id}}">{{$shop->shop_name}} </option>
                                </select>
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

                        <label>Main Image <span class="text-danger">*</span></label>
                        <input type='file' name="product_img" required="" onchange="readURL(this);" />
                        <img id="blah" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200"
                            width="200" alt="your image" /><br>

                        <label>Secendary Image</label>
                        <input type='file' name="product_img_2" onchange="readURL2(this);" />
                        <img id="blah2" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200"
                            width="200" alt="your image" /><br>

                        <label>Optional Image</label>
                        <input type='file' name="product_img_3" onchange="readURL3(this);" />
                        <img id="blah3" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200"
                            width="200" alt="your image" /><br>
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
    $('#percentage_price').hide();
    $('#percentage-box').click(function() {
     $('#percentage_price')[this.checked ? "show" : "hide"]();
    });

    $(function(){

    $('#totalprice').on('input', function() {
      calculate();
    });
    $('#percentage').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#totalprice').val()); 
        var pEarned = parseInt($('#percentage').val());
        var perc="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
           }else{
           perc = ((pEarned/100) * pPos).toFixed(0);
           var total = (pPos-perc);
           console.log(total)
           }

        $('#disval').val(perc);
        $('#afterdis').val(total);

    }

});
</script>
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

    function getSubSubCategory(){
        let id = $("#subcategory_id").val();
        // alert(id);
        let url = '/admin/product/subsubcategory/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(element => {
                    html+='<option value='+element.id+'>'+element.sub_sub_category_name+'</option>'
                });
                $("#subsubcategory_id").html(html);
            }
        });
    }

    function getBrand(){
        let id = $("#shop_id").val();
        // alert(id);
        let url = '/admin/product/brand/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                let html = '';
                console.log(response)
                response.forEach(element => {
                    html+='<option value='+element.id+'>'+element.brand_name+'</option>'
                });
                $("#brand_id").html(html);
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