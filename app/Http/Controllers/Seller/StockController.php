<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use App\Models\StockVariation;
use App\Models\AllStockProduct;
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
        // $stocks = Stock::with(['stockVariation' => function($q){
        //     $q->with::(['color']);
        // }])->orderBy('id', 'desc')->where('seller_id',auth('seller')->user()->id)->paginate();
        // return view('seller.stock.index', compact('stocks'));

        $stocks = Stock::with(['stockVariation' => function($q) {
                $q->with('color','size','weight');
            }])->orderBy('id', 'desc')->where('seller_id',auth('seller')->user()->id)->paginate();
        
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
            'perches_code'  => 'required|unique:stocks',
            'perches_price' => 'required',
            'sell_price' => 'required'
        ]);
        \DB::transaction(function () use( $request ) {
            $stock = new Stock();
            $formData = $request->all();
            $stock->status = 1;
            $stock->approval = 0;
            $stock->fill($formData)->save();

            $variation = new StockVariation();
            $formData = $request->all();
            $variation->seller_id = $request->seller_id;
            $variation->stock_id = $stock->id;
            // $variation->product_id = $request->product_id;
            $variation->fill($formData)->save();
            // dd($request->quantity);

            if($request->quantity > 0){
                for ($i=1; $i <= $request->quantity; $i++) { 
                    $data = new AllStockProduct();
                    $formData = $request->all();
                    $data->stock_id = $stock->id;
                    $data->barcode = 'product'.'-'. random_int(10000000, 99999999);
                    $data->fill($formData)->save();
                }
            }
        });
        Toastr::success('Stock Create Successfully', 'Success');
        return redirect()->route('seller.stock.list');
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
        Toastr::success('Stock Update Successfully', 'Success');
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
