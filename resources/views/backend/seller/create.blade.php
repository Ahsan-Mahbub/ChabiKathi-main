@extends('backend.layouts.app')
@section('content')
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ $error }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endforeach
    @endif
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Add Seller</h3>
            <div class="block-options">
            	<a href="{{route('seller.list')}}">
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
                    <form role="form" action="{{route('seller.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Seller First Name.." required="">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Seller Last Name.." required="">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Seller Email.." required="">
                                <label for="email">Seller Email <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Seller Contact.." required="">
                                <label for="contact">Seller Contact <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="shop_name" name="shop_name" placeholder="Enter Seller Shop Name.." required="">
                                <label for="shop_name">Shop Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="shop_address" name="shop_address" placeholder="Enter Seller Shop Address.." required="">
                                <label for="shop_address">Shop Address <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password.." required="">
                                <label for="password">Password <span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <label>Shop Logo</label>
                        <input type='file' name="shop_logo" required="" onchange="readURL(this);" />
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