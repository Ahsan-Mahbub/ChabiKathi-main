<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;
use Toastr;
use Validator;
use Str;
use App\Http\Requests\PreviousProductRequest;

class PreviousProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->where('approval',1)->first();
        $products = Product::orderBy('id', 'desc')->where('seller_id','!=',auth('seller')->user()->id)->where('status',1)->where('approval',1)->paginate();
        return view('seller.product.previous_product',compact('products','shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validator  = $request->validate([
            'product_name'  => 'required',
            'slug'  => 'required',
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
            'shop_id' => 'required',
        ]);
        $product = new Product();
        $requested_data = $request->all();
        $shops = Shop::where('id', $request->shop_id)->first();
        $seller = $shops->seller_id;
        $product->status = 1;
        $product->seller_id = $seller;
        $product->approval = 0;
        $product->slug = $request->slug . '-' . 'prv' . Str::random(5) ;
        $product->sku .= 'sku-' . $product->product_name.time();
        $save = $product->fill($requested_data)->save();
        if($save){
            Toastr::success('Another Shop Product Create Your Shop Successfully', 'Success');
            return redirect()->route('seller.product.list');
        }else{
            Toastr::warning(' Product Create Did Not Successfully', 'Damage');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
