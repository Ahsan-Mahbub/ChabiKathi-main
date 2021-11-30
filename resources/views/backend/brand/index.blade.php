@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Brand Table</b></h3>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Brand Name</th>
                        <th class="text-center"> Brand Slug</th>
                        <th class="text-center" style="width: 15%;">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($brands as $brand)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$brand->brand_name}}</td>
                        <td class="font-w600 text-center">{{$brand->slug}}</td>
                        <td class="text-center">
                            <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive"
                                id="brand_status" data="{{$brand->id}}" {{$brand->status==1 ? 'checked' : ''}}>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('brand.edit',$brand->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-secondary m-5 delete-confirm"
                                href="{{route('brand.delete',$brand->id)}}" data="{{$brand->id}}" id="delete"
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
                            window.location.href = "/admin/brand/list" ;
                        },
                    });
                }
            });
        });
</script>


<script type="text/javascript">
    $(document).on("change","#brand_status",function(){
    var id=$(this).attr('data');
    if(this.checked){
        var status=1;
    }else{
        var status=0;
    }
    $.ajax({
            url: '/kathi/cbmin/brand/status/'+id+'/'+status,
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