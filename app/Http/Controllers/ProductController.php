<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Toastr;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $requested_data = $request->all();
        $product->status = 1;
        $product->approval = 0;
        $product->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('product.list')
            ->with('success', 'Sub Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.product.show', compact('product'));
    }

    public function status($id)
    {
        $product_status = Product::findOrFail($id);
        if ($product_status->status == 0) {
            $product_status->status = 1;
        } else {
            $product_status->status = 0;
        }
        $product_status->save();
        Toastr::success('Status Change Successfully', 'Success');
        return redirect()->back();
    }

    public function approval($id)
    {
        $product_approval = Product::findOrFail($id);
        if ($product_approval->approval == 1) {
            $product_approval->approval = 0;
        } else {
            $product_approval->approval = 1;
        }
        $product_approval->save();
        Toastr::success('Approval Change Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_delete = Product::findOrFail($id);

        $product_delete->delete();

        return response()->json();
    }
}
