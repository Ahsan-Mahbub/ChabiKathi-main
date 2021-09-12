@extends('seller.layouts.app')
@section('content')


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
                <form role="form" action="{{route('seller.update',$shop->id)}}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="profile-settings-username">Shop Name</label>
                            <input type="text" class="form-control form-control-lg" id="profile-settings-username"
                                name="shop_name" placeholder="Enter your Name.." value="{{$shop->shop_name}}">
                        </div>


                        <div class="col-12">
                            <label>Shop Image</label>
                            <input type='file' name="image" value="/{{$shop->image}}" onchange="readURL3(this);" />
                            <img id="blah3"
                                src="{{$shop->image==''? asset('asset/backend/assets/media/photos/image.png'): '/'.$shop->image}}"
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