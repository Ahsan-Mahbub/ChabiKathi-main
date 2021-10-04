<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Models\Product;

class SubSubCategoryProductController extends Controller
{
    public function subsubCategoryProduct($slug){
        $subsubcategoryName = SubSubCategory::where('status',1)->get();
        $subsubcategory = SubSubCategory::where('slug', $slug)->first();
        $product = Product::where('subsubcategory_id', $subsubcategory->id)->where('status',1)->where('approval',1)->paginate(18);
        return view('fontend.pages.category_all_product',compact('product','subsubcategory','subsubcategoryName'));
    }
}
