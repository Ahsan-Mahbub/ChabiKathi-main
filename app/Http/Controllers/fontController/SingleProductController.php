<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class SingleProductController extends Controller
{
    public function singleProduct($slug){
        $product = Product::where('product_slug', $slug)->first();
        $related_product = DB::table('products')->select('*')->join('categories','categories.id', '=', 'products.category_id')->where('categories.id', $product->category_id)->where('products.status',1)->where('products.approval',1)->orderBy('products.id','desc')->paginate(18);
        // dd($related_product);

        return view('fontend.pages.single_product',compact('product','related_product'));
    }
}