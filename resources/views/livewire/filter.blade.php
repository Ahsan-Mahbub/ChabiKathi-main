<div class="col-xl-12">
    <div class="form-group row">
        <label class="col-12" for="example-select2">Product Name</label>
        <div class="col-lg-12">
            <input wire:model="searchTerm" type="text" class="form-control" placeholder="Search On Product Name" />
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12 row">
        @foreach($products as $value)
        <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2 mr-4 mb-3 stock_product" data-id="{{$value}}" style="cursor: pointer;border: 3px solid #ddd;border-radius: 5px;">
            <div class="card text-center custom-card">
                <img width="130" height="120" style="padding: 8px;" src=/{{$value->product_img}}>
                <div class="card-body">
                    <h5>{{ $value->product_name  }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <section class="pagination mb-15">
        <div class="container nav-content">
            {{ $products->links('livewire.pagination') }}
        </div>
    </section>
</div>

