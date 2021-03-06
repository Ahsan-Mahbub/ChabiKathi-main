@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Products Table</b></h3>
        <a href="{{route('product.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Product
        </a>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Product Name</th>
                        <th class="text-center"> Product Main Image</th>
                        <th class="text-center"> Categories Name</th>
                        <th class="text-center"> SKU</th>
                        <th class="text-center"> Price</th>
                        <th class="text-center"> Discount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$product->product_name}}</td>
                        <td class="font-w600 text-center">
                            <img style="width: 250px; height: 150px;" src="/{{$product->product_img}}">
                        </td>
                        <td class="text-center">{{$product->category? $product->category->category_name : 'null'}}</td>
                        <td class="text-center">{{$product->sku}}</td>
                        <td class="text-center">{{$product->price}}</td>
                        <td class="text-center">{{$product->discount}}</td>
                        <td class="text-center">

                            <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive"
                                id="product" data="{{$product->id}}" {{$product->status==1 ? 'checked' : ''}}>

                        </td>
                        <td class="text-center">
                            <?php
                                if ($product->approval == 0) {
                                    ?>
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('product.approval',$product->id)}}">
                                <i class="fa fa-check text-danger mr-5"></i> Approval
                            </a>
                            <?php
                                 } 
                            ?>
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('product.show',$product->id)}}">
                                <i class="si si-eye text-info mr-5"></i> View More
                            </a>
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('product.edit',$product->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>

                            <a class="btn btn-sm btn-secondary m-5 delete-confirm"
                                href="{{route('product.delete',$product->id)}}" data="{{$product->id}}" id="delete"
                                type="button">
                                <i class="fa fa-times text-danger mr-5"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<!-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!} -->

<script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            const id = $(this).attr('data');
          
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function (value) {
          
                if (value) {
                    $.ajax({
                        url: url ,
                        data: id,
                        type: "delete",
                        dataType: "json",
                        success: function (response) {
                            toastr.warning(" Product Deleted Successfully", "Success");
                            window.location.href = "/kathi/cbmin/product/list" ;
                        },
                    });
                }
            });
        });
</script>

<script type="text/javascript">
    $(document).on("change","#product",function(){
    var id=$(this).attr('data');
    if(this.checked)
    {
        status=1
    }else{
        status=0
    }
    $.ajax({
        url:"/kathi/cbmin/product/status/"+id+'/'+status,
        type:"get",
        datatype:"json",
        success:function(response)
        {
           toastr.success("Status Change Successfully", "Success");
        }
    });
});
</script>
@endsection