@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title text-center"> Update Category</h3>
            <div class="block-options">
                <a href="{{route('category.list')}}">
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
                    <form role="form" action="{{route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="text" class="form-control" value="{{$category->category_name}}" id="cat_name" name="category_name" placeholder="Enter Category Name.." required="">
                                <label for="cat_name">Category Name <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" value="{{$category->category_priority}}" id="cat_priority" name="category_priority" placeholder="Enter Priority Number.." required="">
                                <label for="cat_priority">Home Page Priority Number <span class="text-danger">*</span> </label>
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