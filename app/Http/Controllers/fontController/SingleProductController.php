<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stock;
use DB;

class SingleProductController extends Controller
{
    public function singleProduct($slug){
        // $productDetails = Product::with(['stock'=> function($q){
        //     $q->with('color','size','weight');
        // }])->get();

        // $productDetails = Stock::whereHas('product')->get();
        // $productDetails = Product::with('stock')->get();
 
        $product = Product::where('slug', $slug)->first();
        $productDetails = Product::with(['stock'=> function($q){
            $q->orderBy('color_id');
        }])->where('slug', $slug)->first();
        //$colors = Stock::whereHas('color')->where('product_id', $product->id)->get();
        dd($productDetails);

        $related_product = DB::table('products')->select('*')->join('categories','categories.id', '=', 'products.category_id')->where('categories.id', $product->category_id)->where('products.status',1)->where('products.approval',1)->orderBy('products.id','desc')->paginate(18);
        // dd($related_product);

        return view('fontend.pages.single_product',compact('product','related_product'));
    }
}
