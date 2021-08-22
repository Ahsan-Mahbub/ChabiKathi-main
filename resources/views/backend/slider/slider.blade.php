@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Slider</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
            </div>
        </div>
        <div class="block-content">
            <div class="row justify-content-center py-20">
                <div class="col-xl-6">
                    <form role="form" action="{{route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_name}}" id="slider_name" name="slider_name" placeholder="Enter Slider Name.." required="">
                                <label for="slider_name">Slider Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_link}}" id="slider_link" name="slider_link" placeholder="Enter Slider Link.." required="">
                                <label for="slider_link">Slider Link <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <label>Slider Image <span class="text-danger">*</span></label>
                        <input type='file' name="slider_img" value="{{$slider->slider_img}}" required="" onchange="readURL(this);" />
                        <img id="blah" src="{{$slider->slider_img ? '/' . $slider->slider_img :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="300" alt="your image" /><br>


                        
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_name_2}}" id="slider_name_2" name="slider_name_2" placeholder="Enter Slider Name.." required="">
                                <label for="slider_name_2">Slider Name 2<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_link_2}}" id="slider_link_2" name="slider_link_2" placeholder="Enter Slider Link.." required="">
                                <label for="slider_link_2">Slider Link 2<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <label>Slider Image 2</label>
                        <input type='file' name="slider_img_2" value="{{$slider->slider_img_2}}" onchange="readURL2(this);" />
                        <img id="blah2" src="{{$slider->slider_img_2 ? '/' . $slider->slider_img_2 :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="300" alt="your image" /><br>



                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_name_3}}" id="slider_name_3" name="slider_name_3" placeholder="Enter Slider Name.." required="">
                                <label for="slider_name_3">Slider Name 3<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$slider->slider_link_3}}" id="slider_link_3" name="slider_link_3" placeholder="Enter Slider Link.." required="">
                                <label for="slider_link_3">Slider Link 3<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <label>Slider Image 3</label>
                        <input type='file' name="slider_img_3" value="{{$slider->slider_img_3}}" onchange="readURL3(this);" />
                        <img id="blah3" src="{{$slider->slider_img_3 ? '/' . $slider->slider_img_3 :  '/asset/backend/assets/media/photos/image.png'}}" height="200" width="300" alt="your image" /><br>

                        <div class="form-group">
                            <button type="submit" class="btn btn-alt-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah2')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah3')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection