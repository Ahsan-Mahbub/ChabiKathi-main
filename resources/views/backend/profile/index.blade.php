@extends('backend.layouts.app')
@section('content')
<div class="bg-image bg-image-bottom" style="background-image: url('{{ asset('asset/backend/assets/media/photos/photo13@2x.jpg')}}');">
    <div class="bg-black-op-75 py-30">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-15">
                <a class="img-link" href="be_pages_generic_profile.html">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{Auth::user()->image==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.Auth::user()->image}}" alt="">
                </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white font-w700 mb-10">{{Auth::user()->name}}</h1>
            <h2 class="h5 text-white-op">
                {{Auth::user()->role}}
            </h2>
            <!-- END Personal -->

            <!-- Actions -->
            <a href="{{route('admin')}}" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
                <i class="fa fa-arrow-left mr-5"></i> Back to Dashboard
            </a>
            <!-- END Actions -->
        </div>
    </div>
</div>
<div class="container">
	<div class="content">
    <!-- User Profile -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                <i class="fa fa-user-circle mr-5 text-muted"></i> User Profile
            </h3>
        </div>
        <div class="block-content">
            <form role="form" action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                    <div class="col-12">
                        <label for="profile-settings-username">Name</label>
                        <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="name" placeholder="Enter your Name.." value="{{Auth::user()->name}}">
                    </div>
                    <div class="col-12">
                        <label for="profile-settings-email">Email</label>
                        <input type="email" class="form-control form-control-lg" id="profile-settings-email" placeholder="Enter Email.." value="{{Auth::user()->email}}" disabled="">
                    </div>
                    <div class="col-12">
                        <label for="profile-settings-phone">Phone</label>
                        <input type="text" class="form-control form-control-lg" id="profile-settings-phone" name="phone" placeholder="Enter Phone Number.." value="{{Auth::user()->phone}}">
                    </div>
                    <div class="col-12">
                        <label for="profile-settings-role">Role</label>
                        <input type="text" class="form-control form-control-lg" id="profile-settings-role" placeholder="Enter Phone Number.." value="{{Auth::user()->role}}" disabled="">
                    </div>
                    <div class="col-12">
                        <label for="profile-settings-password">Password</label>
                        <input type="password" class="form-control form-control-lg" id="profile-settings-password" name="password" placeholder="Enter Password if you Change..">
                    </div>
                    <div class="col-12">
                        <label>Optional Image</label>
                        <input type='file' name="image" value="{{Auth::user()->image}}" onchange="readURL3(this);" />
                        <img id="blah3" src="{{Auth::user()->image==''? asset('asset/backend/assets/media/photos/image.png'): '/'.Auth::user()->image}}" height="200" width="200" alt="your image" /><br>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END User Profile -->
</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
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