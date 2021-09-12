@extends('seller.layouts.app')
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
            <h3 class="block-title text-center"> Add Shop</h3>
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
                    <form role="form" action="{{route('seller.update',$shop->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <input type="hidden" name="seller_id" value="{{auth('seller')->user()->id}}">
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="brand_name" name="shop_name" value="{{$shop->shop_name}}" placeholder="Enter Brand Name.." required="">
                                <label for="brand_name">Shop Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="slug" name="slug" value="{{$shop->slug}}" placeholder="Enter Shop Slug.." required="">
                                <label for="slug">Shop Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <label>Shop Image</label>
                        <input type='file' name="image" value="/{{$shop->image}}" onchange="readURL3(this);" />
                        <img id="blah3"
                            src="{{$shop->image==''? asset('asset/backend/assets/media/photos/image.png'): '/'.$shop->image}}"
                            height="200" width="200" alt="your image" /><br>
                        <div class="form-group">
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
<script type="text/javascript">
    $("#brand_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});
</script>
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