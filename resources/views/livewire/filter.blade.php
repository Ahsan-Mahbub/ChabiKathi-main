<div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <input wire:model="searchTerm" style="margin-left: 8rem;
        margin-top: 1rem;" type="text" placeholder="Product Search..."/>
    </div>

    <div class="col-md-4"></div>
    <div class="custom-div3 mt-2">

        <div class="col-md-12 row">
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 mt-4 each_medicine" data-id="{{$product}}">
                <div class="card text-center custom-card">
                    <td><img width="130" height="97" style="padding: 8px;" src=/{{$product->product_img}}> </td>
                    <div class="card-body"><h5>{{ $product->product_name  }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
    {{ $products->links('livewire.pagination') }}
    </div>
</div>