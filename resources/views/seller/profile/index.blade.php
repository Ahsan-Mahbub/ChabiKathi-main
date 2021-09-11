@extends('seller.layouts.app')
@section('content')
<div class="bg-image bg-image-bottom"
    style="background-image: url('{{ asset('asset/backend/assets/media/photos/photo13@2x.jpg')}}');">
    <div class="bg-black-op-75 py-30">
        <div class="content content-full text-center">
            <!-- Avatar -->
            <div class="mb-15">
                <a class="img-link" href="/{{auth('seller')->user()->image}}">
                    <img class="img-avatar img-avatar96 img-avatar-thumb"
                        src="{{auth('seller')->user()->image==''? asset('asset/backend/assets/media/avatars/avatar15.jpg'): '/'.auth('seller')->user()->image}}"
                alt="">
                </a>
            </div>
            <!-- END Avatar -->

            <!-- Personal -->
            <h1 class="h3 text-white font-w700 mb-10">{{auth('seller')->user()->first_name}}</h1>
            <!-- END Personal -->

            <!-- Actions -->
            {{-- <a href="{{route('seller')}}" class="btn btn-rounded btn-hero btn-sm btn-alt-secondary mb-5">
            <i class="fa fa-arrow-left mr-5"></i> Back to Dashboard
            </a> --}}
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
                    <i class="fa fa-user-circle mr-5 text-muted"></i> Seller Profile
                </h3>
            </div>
            <div class="block-content">
                <form role="form" action="{{route('seller.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="profile-settings-username">Name</label>
                            <input type="text" class="form-control form-control-lg" id="profile-settings-username"
                                name="first_name" placeholder="Enter your Name.."
                                value="{{auth('seller')->user()->first_name}}">
                        </div>
                        <div class="col-12">
                            <label for="profile-settings-email">Email</label>
                            <input type="email" class="form-control form-control-lg" id="profile-settings-email"
                                placeholder="Enter Email.." value="{{auth('seller')->user()->email}}" disabled="">
                        </div>
                        <div class="col-12">
                            <label for="profile-settings-phone">Contact</label>
                            <input type="text" class="form-control form-control-lg" id="profile-settings-phone"
                                name="contact" placeholder="Enter Phone Number.."
                                value="{{auth('seller')->user()->contact}}">
                        </div>
                        {{-- <div class="col-12">
                            <label for="profile-settings-role">Role</label>
                            <input type="text" class="form-control form-control-lg" id="profile-settings-role"
                                placeholder="Enter Phone Number.." value="{{Auth::seller()->role}}" disabled="">
                    </div> --}}
                    <div class="col-12">
                        <label for="profile-settings-password">Password</label>
                        <input type="password" class="form-control form-control-lg" id="profile-settings-password"
                            name="password" placeholder="Enter Password if you Change..">
                    </div>
                    <div class="col-12">
                        <label>Optional Image</label>
                        <input type='file' name="banner" value="{{auth('seller')->user()->banner}}"
                            onchange="readURL3(this);" />
                        <img id="blah3"
                            src="{{auth('seller')->user()->banner==''? asset('asset/backend/assets/media/photos/image.png'): '/'.auth('seller')->user()->banner}}"
                            height="200" width="200" alt="your image" /><br>
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