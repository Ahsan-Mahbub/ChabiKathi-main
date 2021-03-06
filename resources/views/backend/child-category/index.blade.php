@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Child Categories Table</b></h3>
        <a href="{{route('child-category.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Child Category
        </a>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center">Child Categories Name</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center">Sub Sub Categories Name</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($childcategories as $value)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$value->child_category_name}}</td>
                        <td class="font-w600 text-center">{{$value->slug}}</td>
                        <td class="text-center">
                            {{$value->subsubcategory? $value->subsubcategory->sub_sub_category_name : 'null'}}
                        </td>
                        <td class="text-center">
                            <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="status"
                                data="{{$value->id}}" {{$value->status==1 ? 'checked' : ''}}>
                        </td>
                        <td class="text-center">
                           <a class="btn btn-sm btn-secondary m-5" href="{{route('child-category.edit',$value->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-secondary m-5 delete-confirm" href="{{route('child-category.delete',$value->id)}}" data="{{$value->id}}" id="delete" type="button">
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
                            window.location.href = "/admin/child-category/list" ;
                        },
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).on("change","#status",function(){
        var id=$(this).attr('data');
        if(this.checked){
            var status=1;
        }else{
            var status=0;
        }
        $.ajax({
            url: '/kathi/cbmin/child-category/status/'+id+'/'+status,
            type: 'get',
            dataType: 'json',
            success: function(response) {
                toastr.success("Status Change Successfully", "Success");
               console.log(response);
            }
        });
    });
    </script>
@endsection
