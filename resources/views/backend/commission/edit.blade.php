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
            <h3 class="block-title text-center"> Update Commission</h3>
            <div class="block-options">
                <a href="{{route('commission.list')}}">
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
                    <form role="form" action="{{route('commission.update',$commission->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="form-material">
                                <input type="number" class="form-control" value="{{$commission->commission}}" id="commission" name="commission" placeholder="Enter Commission.." required="">
                                <label for="sub_cat_name">Commission(%) <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material">
                                <select class="js-select2 form-control js-select2-enabled select2-hidden-accessible" id="val-select22" name="category_id" style="width: 100%;" data-placeholder="Choose one.." data-select2-id="val-select22" tabindex="-1" aria-hidden="true">
                                    @foreach($category as $value)
                                    <option value="{{$value->id}}" {{ $commission->category_id == $value->id ? 'selected' : ''}}>{{$value->category_name}} </option>
                                    @endforeach
                                </select>
                                <label for="val-select2">Category Name</label>
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