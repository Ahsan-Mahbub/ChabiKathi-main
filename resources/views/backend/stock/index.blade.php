@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Stock Table</b></h3>
        <a href="{{route('stock.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Stock
        </a>
    </div>
    <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center">S/L</th>
                    <th class="text-center"> Product Name</th>
                    <th class="d-none d-sm-table-cell text-center">Quantity</th>
                    <th class="d-none d-sm-table-cell text-center">Color Name</th>
                    <th class="d-none d-sm-table-cell text-center">Size Name</th>
                    <th class="d-none d-sm-table-cell text-center">Weight</th>
                    <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $sl = 1; @endphp
                @foreach($stocks as $stock)
                <tr>
                    <td class="text-center">{{$sl++}}</td>
                    <td class="font-w600 text-center">{{$stock->product? $stock->product->product_name : 'Null'}}</td>
                    <td class="font-w600 text-center">{{$stock->quantity}}</td>
                    <td class="font-w600 text-center">{{$stock->color? $stock->color->color_name : 'Null'}}</td>
                    <td class="font-w600 text-center">{{$stock->size? $stock->size->size_name : 'Null'}}</td>
                    <td class="font-w600 text-center">{{$stock->weight? $stock->weight->weight_name : 'Null'}}</td>
                    <td class="d-none d-sm-table-cell text-center">
                        <?php
                        if ($stock->status == 1) {
                          ?>
                          <span class="badge badge-success">Active</span>
                          <?php
                        }else{
                            ?>
                            <span class="badge badge-danger">Deactive</span>
                            <?php
                        }
                        ?>
                    </td>
                    <td class="text-center">
                        <?php
                            if ($stock->approval == 0) {
                                ?>
                                <a class="btn btn-sm btn-secondary m-5" href="{{route('stock.approval',$stock->id)}}">
                                    <i class="fa fa-check text-danger mr-5"></i> Approval
                                </a>
                                <?php
                             } 
                        ?>
                        <a class="btn btn-sm btn-secondary m-5" href="{{route('stock.edit',$stock->id)}}">
                            <i class="fa fa-pencil text-primary mr-5"></i> Edit
                        </a>
                        <a class="btn btn-sm btn-secondary m-5" href="{{route('stock.status',$stock->id)}}">
                            <i class="fa fa-refresh mr-5 {{$stock->status == 1 ? 'text-success' :' text-warning'}}"></i> Status
                        </a>
                        <a class="btn btn-sm btn-secondary m-5 delete-confirm" href="{{route('stock.delete',$stock->id)}}" data="{{$stock->id}}" id="delete" type="button">
                            <i class="fa fa-times text-danger mr-5"></i> Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('script')
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
                           
                            toastr.warning(" Deleted successfully", "!!!");
                            window.location.href = "/admin/stock/list" ;
                        },
                    });
                }
            });
        });
    </script>
@endsection
