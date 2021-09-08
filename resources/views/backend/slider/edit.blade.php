@extends('backend.layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Slider</h3>
            <div class="block-options">
                <a href="{{route('slider.list')}}">
                    <i class="si si-list"></i>
                </a>
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
                                <input type="text" class="form-control" id="slider_name" name="slider_name" placeholder="Enter Slider Name.." value="{{$slider->slider_name}}" required="">
                                <label for="slider_name">Slider Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="slider_link" name="slider_link" placeholder="Enter Slider Link.." value="{{$slider->slider_link}}" required="">
                                <label for="slider_link">Slider Link <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="slider_title" value="{{$slider->slider_title}}" name="slider_title" placeholder="Enter Slider Title..">
                                <label for="slider_title">Slider Title</label>
                            </div>
                        </div>

                        <label>Slider Image <span class="text-danger">*</span></label>
                        <input type='file' name="slider_img" value="{{$slider->slider_img}}" onchange="readURL(this);" />
                        <img id="blah" src="{{$slider->slider_img ? '/' . $slider->slider_img :  '/asset/backend/assets/media/photos/image.png'}}" height="150" width="350" alt="your image" /><br>


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
</script>
@endsection