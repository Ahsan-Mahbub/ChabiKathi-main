@extends('backend.layouts.app')
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
	                <h3 class="block-title text-center">Previous Product</h3>
	            </div>
	            <div class="block-content block-content-full">
        			<div class="table-responsive">
        				<table class="table table-bordered table-striped table-vcenter js-dataTable-full">
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
		                    <form role="form" action="{{route('productprevious.store')}}" method="post"
		                        enctype="multipart/form-data">
		                        @csrf
		                        <input type="hidden" id="seller_id" name="seller_id" >
		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="text" class="form-control" id="product_name" name="product_name"
		                                    placeholder="Enter Product Name.." required="">
		                                <label for="product_name">Product Name <span class="text-danger">*</span></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                                <input type="text" class="form-control" id="product_slug" name="slug"
		                                    placeholder="Enter Product Slug.." required="">
		                                <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="form-material">
		                            	<textarea name="product_desc" id="product_desc" class="form-control"></textarea>
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
	                                    <input type="number" id="afterdis" class="form-control" disabled="">
	                                    <input type="hidden" id="afterdishidden" name="discounted_price">
	                                    <label for="Discount">After Percentage Total Price</label>
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
		                                <select class="form-control" id="shop_id" name="shop_id" onclick="getBrand()">
		                                    <option value="0" selected="">Select Shop</option>
		                                    @foreach($shops as $value)
		                                        <option value="{{$value->id}}">{{$value->shop_name}} </option>
		                                    @endforeach
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
<script type="text/javascript">
	$('.stock_product').click(function(){
		let product_info = $(this).data('id');
		console.log(product_info);
		let product_names = product_info.product_name;
		let slug = product_info.slug;
		let product_desc = product_info.product_desc;
		let totalprice = product_info.price;
		let percentage = product_info.percentage;
		let discount = product_info.discount;
		let category_id = product_info.category_id;
		let subcategory_id = product_info.subcategory_id;
		let subsubcategory_id = product_info.subsubcategory_id;
		let product_img = product_info.product_img;
		let product_img_2 = product_info.product_img_2;
		let product_img_3 = product_info.product_img_3;
		let seller_id = product_info.seller_id;
		let afterdis = product_info.discounted_price;
		let afterdishidden = product_info.discounted_price;


		document.getElementById('seller_id').value = seller_id;
		document.getElementById('product_name').value = product_names;
		document.getElementById('product_slug').value = slug;
		document.getElementById('product_desc').value = product_desc;
		document.getElementById('totalprice').value = totalprice;
		document.getElementById('percentage').value = percentage;
		document.getElementById('discount').value = discount;
		document.getElementById('category_id').value = category_id;
		document.getElementById('subcategory_id').value = subcategory_id;
		document.getElementById('subsubcategory_id').value = subsubcategory_id;
		document.getElementById('shop_id').value = shop_id;
		document.getElementById('brand_id').value = brand_id;
		document.getElementById('product_img').value = product_img;
		document.getElementById('product_img_2').value = product_img_2;
		document.getElementById('product_img_3').value = product_img_3;
		document.getElementById('afterdis').value = afterdis;
		document.getElementById('afterdishidden').value = afterdishidden;
	})

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
<script type="text/javascript">
    $("#product_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#product_slug").val(Text);        
    });
</script>
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

        $('#discount').val(perc);
        $('#afterdis').val(total);
        $('#afterdishidden').val(total);

    }

});
</script>
@endsection