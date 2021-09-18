@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Shop Table</b></h3>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center">Seller Name</th>
                        <th class="text-center">Shop Name</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center" style="width: 15%;">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($shopes as $shop)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="text-center">
                            {{$shop->parent? $shop->parent->first_name : 'null'}}
                        </td>
                        <td class="font-w600 text-center">{{$shop->shop_name}}</td>
                        <td class="font-w600 text-center">{{$shop->slug}}</td>
                        <td class="text-center">
                            <?php
                            if ($shop->status == 1) {
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
                                if ($shop->approval == 0) {
                                    ?>
                                    <a class="btn btn-sm btn-secondary m-5" href="{{route('shop.approval',$shop->id)}}">
                                        <i class="fa fa-check text-danger mr-5"></i> Approval
                                    </a>
                                    <?php
                                 } 
                            ?>
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('shop.status',$shop->id)}}">
                                <i class="fa fa-refresh mr-5 {{$shop->status == 1 ? 'text-success' :' text-warning'}}"></i> Status
                            </a>
                            <a class="btn btn-sm btn-secondary m-5 delete-confirm" href="{{route('shop.delete',$shop->id)}}" data="{{$shop->id}}" id="delete" type="button">
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
                            window.location.href = "/admin/shop/list" ;
                        },
                    });
                }
            });
        });
    </script>
@endsection
