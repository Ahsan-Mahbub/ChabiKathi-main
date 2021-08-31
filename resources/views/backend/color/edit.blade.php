@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Color Code</h3>
            <div class="block-options">
                <a href="{{route('color-code.list')}}">
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
                    <form role="form" action="{{route('color-code.update',$color->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="color-name" value="{{$color->color_name}}" name="color_name" placeholder="Enter Color Name" required="">
                                <label for="color-name">Color Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="hex" value="{{$color->color_code}}" name="color_code" placeholder="Enter Code (#ffffff).." required="">
                                <label for="hex">Color Code <span class="text-danger">*</span></label>
                            </div>
                            <div class="form-group">
                                <input type="color" class="form-control" id="color">
                            </div>
                        </div>


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
    let colorInput = document.querySelector('#color');
    let hexInput = document.querySelector('#hex');
    colorInput.addEventListener('input',()=>{
        let color = colorInput.value;
        hexInput.value = color;
    });
</script>
@endsection