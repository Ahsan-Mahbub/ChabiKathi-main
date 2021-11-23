@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Add Child Category</h3>
            <div class="block-options">
                <a href="{{route('child-category.list')}}">
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
                    <form role="form" action="{{route('child-category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="child_category_name" name="child_category_name" placeholder="Enter Child Category Name.." required="">
                                <label for="child_category_name">Child Category Name <span class="text-danger">*</span></label>
                            </div>
                            @error('child_category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Child Category Slug.." required="">
                                <label for="slug">Child Category Slug <span class="text-danger">*</span></label>
                            </div>
                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            @php($subsubcategory = \App\Models\SubSubCategory::where('status',1)->orderBy('id','desc')->get())
                            <div class="form-material">
                                <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="val-select22" name="sub_sub_category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="val-select22" required="" tabindex="-1" aria-hidden="true">
                                    @foreach($subsubcategory as $value)
                                    <option value="{{$value->id}}">{{$value->sub_sub_category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="val-select2">Sub Sub Category Name</label>
                            </div>
                        </div>
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
    $("#child_category_name").keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
        $("#slug").val(Text);        
});
</script>
@endsection