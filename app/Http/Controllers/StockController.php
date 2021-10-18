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
        $stocks = Stock::with(['stockVariation' => function($q) {
                $q->with('color','size','weight');
        }])->orderBy('id', 'desc')->paginate();
        return view('backend.stock.index', compact('stocks'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */

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
    public function update(StockRequest $request, $id)
    {
        // $validation=Validator::make($request->all(),[
        //     'product_id'  => 'required',
        //     'quantity'  => 'required',
        // ]);
        // if ($validation->fails()) {
        //     return back()->withInput()->withErrors($validation);
        // }

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
