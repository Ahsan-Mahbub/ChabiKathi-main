<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\PreviousProductRequest;
use App\Models\Shop;
use Toastr;
use Validator;
use Str;

class PreviousProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::where('status',1)->where('approval',1)->get();
        $products = Product::orderBy('id', 'desc')->where('status',1)->where('approval',1)->paginate();
        return view('backend.product.previous_product',compact('products','shops'));
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
        $validator  = $request->validate([
            'product_name'  => 'required',
            'slug'  => 'required',
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
            'shop_id' => 'required',
            'seller_id' => 'required'
        ]);
        $shops = Shop::where('id', $request->shop_id)->first();
        $seller = $shops->seller_id;
        $product = new Product();
        $requested_data = $request->all();
        $product->seller_id = $seller;
        $product->status = 1;
        $product->approval = 0;
        $product->slug = $request->slug . '-' . 'prv' . Str::random(5) ;
        $product->sku .= 'sku-' . $product->product_name.time();
        // dd($product);
        $product->fill($requested_data)->save();
        Toastr::success('Product Create Successfully','Success');
        return redirect()->route('product.list');
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
