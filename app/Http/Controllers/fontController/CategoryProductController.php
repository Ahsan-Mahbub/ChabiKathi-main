<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryProductController extends Controller
{
    public function categoryProduct($slug){
        // $product = Product::where('category_id',$id)->paginate(18);
        $categoryName = Category::where('status',1)->get();
        $category = Category::where('slug', $slug)->first();
        $product = Product::where('category_id', $category->id)->where('status',1)->where('approval',1)->paginate(18);
        // dd($product);
        return view('fontend.pages.category_all_product',compact('product','category','categoryName'));
    }
}
