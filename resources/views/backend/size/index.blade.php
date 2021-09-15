@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Size Table</b></h3>
        <a href="{{route('size.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Size
        </a>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Size Name</th>
                        <th class="text-center" style="width: 15%;">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($sizes as $size)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$size->size_name}}</td>
                        <td class="text-center">
                            <?php
                            if ($size->status == 1) {
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
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('size.edit',$size->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('size.status',$size->id)}}">
                                <i class="fa fa-refresh mr-5 {{$size->status == 1 ? 'text-success' :' text-warning'}}"></i> Status
                            </a>
                            <a class="btn btn-sm btn-secondary m-5 delete-confirm" href="{{route('size.delete',$size->id)}}" data="{{$size->id}}" id="delete" type="button">
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
                            window.location.href = "/admin/size/list" ;
                        },
                    });
                }
            });
        });
    </script>
@endsection
