@extends('backend.layouts.app')
@section('content')
<div class="container">
	<div class="block">
		<div class="block-header block-header-default" style="margin-bottom: 20px;">
	        <h3 class="block-title text-center"> Add Stock</h3>
	            <div class="block-options">
	                <a href="{{route('stock.list')}}">
	                    <i class="si si-list"></i>
	                </a>
	            </div>
	    </div>
	</div>
</div>
<div class="container">
	<div class="block">
	    <div class="block-header block-header-default">
	        <h3 class="block-title text-center"> Search Product</h3>
	            <div class="block-options">
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
	                    <i class="si si-refresh"></i>
	                </button>
	                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
	            </div>
	    </div>
    	<form action="be_forms_plugins.html" method="post" onsubmit="return false;">
	        <div class="block-content">
	            <div class="row items-push">
	                <div class="col-xl-6">
	                    <div class="form-group row">
	                        <label class="col-12" for="category_id">Category</label>
	                        <div class="col-lg-12">
	                            <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="category_id" name="category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="category_id" tabindex="-1" aria-hidden="true" onclick="getSubCategory()">
	                                <option disabled="" selected="">Select Category</option>
	                                @foreach($category as $data)
	                                <option value="{{$data->id}}">{{$data->category_name}}</option>
	                                @endforeach
	                            </select>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6">
	                    <div class="form-group row">
	                        <label class="col-12" for="subcategory_id">Sub Category</label>
	                        <div class="col-lg-12">
	                            <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="subcategory_id" name="subcategory_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="subcategory_id" tabindex="-1" aria-hidden="true">
	                                <option disabled="" selected=""> Sub Category</option>
	                            </select>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-12">
	                    <div class="form-group row">
	                        <label class="col-12" for="example-select2">Product Name</label>
	                        <div class="col-lg-12">
	                        	<input type="email" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Search On Product Name">
	                        </div>
	                    </div>
	                </div>

	                @livewire('filter')
	            </div>

	            <div class="custom-div">
                         <table class="table table-bordered mt-4" id="dynamic_field">
                             <tbody>

                             </tbody>
                        </table>
                    </div>
	        </div>
	    </form>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">

	$('.each_medicine').click(function(){
          let data = $(this).attr("data-id");
          data=JSON.parse(data);
          console.log(data);
           let i = 1;
           i++;
           $('#dynamic_field').append(
               `<tr style="height: 55px;" id="row${i}">
                    <td class="" style="width: 4rem; max-width:5rem;">
                        <input min="0" class="form-control">
                    </td>
                    <td class="text-center" style="width:4rem; max-width:5rem;">
                        <input type="text" class="form-control form-control">
                    </td>
                    <td class="text-center" style="width: 6rem;">
                    ${data.product_name}

                    </td>
                    <td class="text-center" style="min-width:5rem; width:12%;">
                        <input type="number" min="0" id="purchase" class="form-control form-control-sm">
                    </td>
                    <td class="text-center" style="max-width: 4rem; width:12%;">
                        <input type="number" min="0" id="sale" class="form-control form-control-sm">
                    </td>
                    <td class="text-center" style="max-width: 6rem; width:2rem;">
                        <input type="date" class="form-control">
                    </td>
                    <td class="text-center" style="max-width: 1rem; width:2rem;">
                        <p>0</p>
                    </td>
                    <td class="text-center" style="max-width: 1rem; width:2rem;">
                        <button type="button" id="'+i+'" class="btn btn-danger btn_remove">X</button>
                    </td>
                </tr>`);
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
</script>
@endsection