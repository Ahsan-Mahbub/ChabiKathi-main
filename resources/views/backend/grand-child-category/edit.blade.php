@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Grand Child Category</h3>
            <div class="block-options">
                <a href="{{route('grand-child-category.list')}}">
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
                    <form role="form" action="{{route('grand-child-category.update',$g_childcategory->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$g_childcategory->grand_child_category_name}}" id="grand_child_category_name" name="grand_child_category_name" placeholder="Enter Grand Child Category Name.." required="">
                                <label for="grand_child_category_name">Grand Child Category Name <span class="text-danger">*</span></label>
                            </div>
                            @error('grand_child_category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$g_childcategory->slug}}" id="slug" name="slug" placeholder="Enter Grand Child Category Slug.." required="">
                                <label for="slug">Grand Child Category Slug <span class="text-danger">*</span></label>
                            </div>
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            @php($childCategory = \App\Models\ChildCategory::where('status',1)->orderBy('id','desc')->get())
                            <div class="form-material">
                                <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="val-select22" name="child_category_id" required="" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="val-select22" tabindex="-1" aria-hidden="true">
                                    @foreach($childCategory as $value)
                                    <option value="{{$value->id}}" {{ $g_childcategory->child_category_id == $value->id ? 'selected' : ''}}>{{$value->child_category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="val-select2">Child Category Name</label>
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
    $("#grand_child_category_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});
</script>
@endsection