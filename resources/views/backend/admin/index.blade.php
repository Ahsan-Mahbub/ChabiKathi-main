@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Admin Table</b></h3>
        <a href="{{route('admin.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Admin
        </a>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Admin Name</th>
                        <th class="text-center"> Email</th>
                        <th class="text-center"> Phone</th>
                        <th class="text-center"> Role</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($admins as $admin)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$admin->name}}</td>
                        <td class="font-w600 text-center">{{$admin->email}}</td>
                        <td class="font-w600 text-center">{{$admin->phone}}</td>
                        <td class="font-w600 text-center">{{$admin->role}}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('admin.edit',$admin->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-secondary m-5 delete-confirm" href="{{route('admin.delete',$admin->id)}}" data="{{$admin->id}}" id="delete" type="button">
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
                            window.location.href = "/admin/control/list" ;
                        },
                    });
                }
            });
        });
    </script>
@endsection
