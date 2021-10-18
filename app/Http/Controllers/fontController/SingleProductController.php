<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class SingleProductController extends Controller
{
    public function singleProduct($slug){
        // $productDetails = Product::with(['stock'=> function($q){
        //     $q->with(['stockVariation'=> function($s){
        //         $s->groupBy('product_id')->with('color','size','weight');
        //     }])->get();
        // }])->where('slug', $slug)->first();

        $product = Product::with(['stockVariation'=> function($q){
            $q->with('size','color','weight')->groupBy(['size_id','color_id','weight_id']);
        }])->where('slug', $slug)->first();
        // dd($product);
        $related_product = DB::table('products')->join('categories','categories.id', '=', 'products.category_id')->select('categories.id','categories.category_name', 'products.*')->where('categories.id', $product->category_id)->where('products.status',1)->where('products.approval',1)->orderBy('products.id','desc')->paginate(18);
        //dd($related_product);
        return view('fontend.pages.single_product',compact('product','related_product'));
    }
}
