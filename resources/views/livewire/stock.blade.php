<div>

    <div class="custom-div3 mt-2">

        <div class="col-md-12 row" id="add">
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 mt-4">
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
