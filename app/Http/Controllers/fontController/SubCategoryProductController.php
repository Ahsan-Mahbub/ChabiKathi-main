<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Product;

class SubCategoryProductController extends Controller
{
    public function subCategoryProduct($slug){
        $subcategoryName = SubCategory::where('status',1)->get();
        $subcategory = SubCategory::where('slug', $slug)->first();
        $product = Product::where('subcategory_id', $subcategory->id)->where('status',1)->where('approval',1)->paginate(18);
        return view('fontend.pages.category_all_product',compact('product','subcategory','subcategoryName'));
    }
}
