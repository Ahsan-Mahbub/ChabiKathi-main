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
            <h3 class="block-title text-center"> Add Admin</h3>
            <div class="block-options">
            	<a href="{{route('admin.list')}}">
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
                <div class="col-xl-12">
                    <form role="form" action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="first_name" name="name" placeholder="Enter Admin Name.." required="">
                                <label for="first_name">Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Admin Email.." required="">
                                <label for="email">Email <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="contact" name="phone" placeholder="Enter Admin Contact..">
                                <label for="contact">Contact Number</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="form-control" id="role" name="role">
                                    <option disabled="" selected="">Select Role</option>
                                        <option value="1">Super Admin </option>
                                        <option value="2">Admin </option>
                                        <option value="3">Editor </option>
                                </select>
                                <label for="role">Select Role</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-material">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password.." required="">
                                <label for="password">Password <span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <label>Profile Image</label>
                        <input type='file' name="image" onchange="readURL(this);" />
                        <img id="blah" src="{{asset('asset/backend/assets/media/photos/image.png')}}" height="200" width="200" alt="your image" /><br>
                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
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