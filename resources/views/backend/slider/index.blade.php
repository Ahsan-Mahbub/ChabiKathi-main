@extends('backend.layouts.app')
@section('content')
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title text-center"><b>Slider Table</b></h3>
        <a href="{{route('slider.create')}}" class="btn btn-success mr-5 mb-5">
            <i class="fa fa-plus mr-5"></i>Add Slider
        </a>
    </div>
    <div class="block-content block-content-full">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">S/L</th>
                        <th class="text-center"> Slider Name</th>
                        <th class="text-center"> Slider Link</th>
                        <th class="text-center">Slider Title</th>
                        <th class="text-center">Slider Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl = 1; @endphp
                    @foreach($sliders as $slider)
                    <tr>
                        <td class="text-center">{{$sl++}}</td>
                        <td class="font-w600 text-center">{{$slider->slider_name}}</td>
                        <td class="text-center">{{$slider->slider_link}}</td>
                        <td class="text-center">{{$slider->slider_title}}</td>
                        <td class="text-center">
                            <img style="width: 350px; height: 150px;" src="/{{$slider->slider_img}}">
                        </td>
                        <td class="text-center">
                            <input type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="slider"
                                data="{{$slider->id}}" {{$slider->status==1 ? 'checked' : ''}}>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-secondary m-5" href="{{route('slider.edit',$slider->id)}}">
                                <i class="fa fa-pencil text-primary mr-5"></i> Edit
                            </a>

                            <a class="btn btn-sm btn-secondary m-5 delete-confirm"
                                href="{{route('slider.delete',$slider->id)}}" data="{{$slider->id}}" id="delete"
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
                            window.location.href = "/kathi/cbmin/slider/list" ;
                        },
                    });
                }
            });
        });
</script>

<script type="text/javascript">
    $(document).on("change","#slider",function(){
var id=$(this).attr('data');
if(this.checked)
{
    status=1
}else{
    status=0
}
$.ajax({
    url:"/kathi/cbmin/slider/status/"+id+'/'+status,
    type:"get",
    datatype:"json",
    success:function(response)
    {
       toastr.success("Status Change Successfully", "Success");
               console.log(response);
    }

});
});

</script>
@endsection