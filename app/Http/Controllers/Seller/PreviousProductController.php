<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Toastr;
use Validator;

class PreviousProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->where('seller_id','!=',auth('seller')->user()->id)->where('status',1)->where('approval',1)->paginate();
        return view('seller.product.previous_product',compact('products'));
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
            'product_slug'  => 'required',
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
            'shop_id' => 'required',
        ]);
        $product = new Product();
        $requested_data = $request->all();
        $product->status = 1;
        $product->approval = 0;
        $product->sku .= 'sku-' . $product->product_name.time();
        $product->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('seller.product.list')
            ->with('success', 'Product created successfully.');
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
