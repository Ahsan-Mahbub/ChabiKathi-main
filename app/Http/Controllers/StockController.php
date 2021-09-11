<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Toastr;
use Validator;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::orderBy('id', 'desc')->paginate();
        return view('backend.stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status','1')->get();
        $products = Product::paginate(5);
        return view('backend.stock.create',compact('category','products'));
    }

    public function productlist($id)
    {
        $products = Product::where('subcategory_id', $id)->get();
        return response()->json($products, 200);
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
            'product_id'  => 'required',
            'quantity'  => 'required',
        ]);

        $stock = new Stock();
        $formData = $request->all();
        $stock->status = 1;
        $stock->fill($formData)->save();
        Toastr::success('Stock Create Successfully');
        return redirect()->route('stock.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $stock = Stock::findOrFail($id);
        if ($stock->status == 0) {
            $stock->status = 1;
        } else {
            $stock->status = 0;
        }
        $stock->save();
        Toastr::success('Status Change Successfully', 'Success');
        return redirect()->back();
    }

    public function approval($id)
    {
        $approval = Stock::findOrFail($id);
        $approval->approval = 1;
        $approval->save();
        Toastr::success('Stock Approved', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('backend.stock.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation=Validator::make($request->all(),[
            'product_id'  => 'required',
            'quantity'  => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $update = Stock::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('stock.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_stock = Stock::findOrFail($id);

        $delete_stock->delete();

        return response()->json();
    }
}
