<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
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
        $stocks = Stock::orderBy('id', 'desc')->where('seller_id',auth('seller')->user()->id)->get();
        return view('seller.stock.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::where('seller_id',auth('seller')->user()->id)->get();
        return view('seller.stock.create',compact('products'));
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
        $preInsert = Stock::where('product_id',$request->product_id)->first();
        //dd($preInsert);
        if($preInsert==''){
            $stock = new Stock();
            $formData = $request->all();
            $stock->status = 1;
            $stock->fill($formData)->save();
            Toastr::success('Stock Create Successfully');
            return redirect()->route('seller.stock.list');
        }else if (($preInsert->size_id == $request->size_id) && ($preInsert->color_id == $request->color_id)) {
            $product= ($request->quantity)+($preInsert->quantity);
            $user = Stock::find($preInsert->id);
            $user->quantity = $product;
            $user->save();
            Toastr::success('Size Color Match! Quantity Updated');
            return redirect()->route('seller.stock.list');
        }else if (($preInsert->size_id == $request->size_id) || ($preInsert->color_id == $request->color_id)) {
            $stock = new Stock();
            $formData = $request->all();
            $stock->status = 1;
            $stock->fill($formData)->save();
            Toastr::success('Stock Create Successfully');
            return redirect()->route('seller.stock.list');
        }else if($preInsert->weight_id == $request->weight_id){
            $product= ($request->quantity)+($preInsert->quantity);
            $user = Stock::find($preInsert->id);
            $user->quantity = $product;
            $user->save();
            Toastr::success('Weight Match! Quantity Updated');
            return redirect()->route('seller.stock.list');
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
        $stock = Stock::findOrFail($id);
        return view('seller.stock.edit', compact('stock'));
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
        $validation=Validator::make($request->all(),[
            'quantity'  => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $update = Stock::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('seller.stock.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_stock = Stock::findOrFail($id);

        $delete_stock->delete();

        return response()->json();
    }
}
