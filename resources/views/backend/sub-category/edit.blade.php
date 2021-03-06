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
            <h3 class="block-title text-center"> Update Sub Category</h3>
            <div class="block-options">
                <a href="{{route('sub-category.list')}}">
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
                    <form role="form" action="{{route('sub-category.update',$subcategory->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$subcategory->sub_category_name}}" id="sub_cat_name" name="sub_category_name" placeholder="Enter Sub Category Name.." required="">
                                <label for="sub_cat_name">Sub Category Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$subcategory->slug}}" id="slug" name="slug" placeholder="Enter Sub Category Slug.." required="">
                                <label for="slug">Sub Category Slug <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            @php($category = \App\Models\Category::where('status',1)->orderBy('id','desc')->get())
                            <div class="form-material">
                                <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="val-select22" name="category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="val-select22" tabindex="-1" aria-hidden="true">
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}" {{ $subcategory->category_id == $value->id ? 'selected' : ''}}>{{$value->category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="val-select2">Category Name</label>
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
    $("#sub_cat_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});
</script>
@endsection