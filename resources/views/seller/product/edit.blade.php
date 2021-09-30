@extends('seller.layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $error }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endforeach
    @endif
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Product</h3>
            <div class="block-options">
                <a href="{{route('seller.product.list')}}">
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
                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="product_slug" value="{{$product->product_slug}}" name="product_slug" placeholder="Enter Product Slug.." required="">
                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <textarea name="product_desc" id="editor" cols="30" rows="20" class="form-control">{{$product->product_desc}}</textarea>
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
                                <input type="number" class="form-control" id="totalprice" value="{{$product->price}}" name="price" placeholder="Enter Product Price.." required="">
                                <label for="totalprice">Product Price <span class="text-danger">*</span> </label>
                            </div>
                        </div>

                        <div id="percentage_price">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="number" class="form-control" id="percentage" value="{{$product->percentage}}" name="percentage" placeholder="Enter Percentage Price..">
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
                                <input type="number" class="form-control" id="disval" value="{{$product->discount}}" name="discount" placeholder="Enter Discount Price..">
                                <label for="afterdis">Discount Price</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="shop_id" name="shop_id" required="" onclick="getBrand()">
                                    <option value="0" selected="">Select Shop</option>
                                        <option value="{{$shop->id}}" {{ $product->shop_id == $shop->id ? 'selected' : ''}}>{{$shop->shop_name}} </option>
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
                        <input type='file' name="product_img" value="{{$product->product_img}}" onchange="readURL(this);" />
                        <img id="blah" src="{{$product->product_img ? '/' . $product->product_img :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="200" alt="your image" /><br>

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
<script type="text/javascript">
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
    $(document).ready(function () {
        function getSubCategory(){
        let id = $("#category_id").val();
        let url = '/admin/product/subcategory/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                console.log(response)
               let html = $();
                $.each(response, function (i, item) {
                    html = html.add("<option value=" + item.id +" >" + item.sub_category_name + "</option>")
                });
                $("#subcategory_id").html(html);
            }
        });
    }
    getSubCategory();
    });

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

    $(document).ready(function () {
        function getBrand(){
        let id = $("#shop_id").val();
        let url = '/admin/product/brand/'+id;
        $.ajax({
            type: "get",
            url: url,
            dataType: "json",
            success: function (response) {
                console.log(response)
               let html = $();
                $.each(response, function (i, item) {
                    html = html.add("<option value=" + item.id +" >" + item.brand_name + "</option>")
                });
                $("#brand_id").html(html);
            }
        });
    }
    getBrand();
    });

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