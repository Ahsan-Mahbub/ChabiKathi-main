<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use App\Http\Requests\SizeRequest;
use Brian2694\Toastr\Facades\Toastr;
use Validator;
use App\Models\Color;
use App\Models\Size;
use App\Models\Weight;
use App\Models\Category;
use DB;

class VariationController extends Controller
{
    public function colorcreate()
    {
        return view('seller.variation.color-create');
    }
    public function colorstore(ColorRequest $request)
    {
        $color = new Color();
        $requested_data = $request->all();
        $color->status = 1;
        $color->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('seller.product.create')
            ->with('success', 'Color created successfully.');
    }

    public function sizecreate()
    {
        return view('seller.variation.size-create');
    }
    public function sizestore(SizeRequest $request)
    {
        $size = new Size();
        $requested_data = $request->all();
        $size->status = 1;
        $size->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('seller.product.create')
            ->with('success', 'Size created successfully.');
    }

    public function weightcreate()
    {
        return view('seller.variation.weight-create');
    }
    public function weightstore(Request $request)
    {
        $validator  = $request->validate([
            'weight_name'  => 'required|unique:weights',
        ]);

        $weight = new Weight();
        $requested_data = $request->all();
        $weight->status = 1;
        $weight->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('seller.product.create')
            ->with('success', 'Weight created successfully.');
    }









    public function getCategory($value)
    {
        // $category = Category::select('id','category_name')->with(['subcategory' => function($q) use($value){
        //     $q->select('id','sub_category_name','category_id')->with(['subsubcategory' => function($d) use($value){
        //         $d->select('id','sub_sub_category_name','sub_category_id')->with(['childcategory' => function($m) use($value){
        //             $m->select('id','child_category_name','sub_sub_category_id')->with(['grandchildcategory' => function($l) use($value){
        //                 $l->select('id','grand_child_category_name','child_category_id')->where('status',1)->orWhere('grand_child_category_name', 'LIKE', "%{$value}%");
        //             }])->where('status',1)->or('child_category_name', 'LIKE', "%{$value}%");
        //         }])->where('status',1)->or('sub_sub_category_name', 'LIKE', "%{$value}%");
        //     }])->where('status',1)->or('sub_category_name', 'LIKE', "%{$value}%");
        // }])->where('status',1)->or('category_name', 'LIKE', "%{$value}%")->get();
        // dd($category);
        // return response()->json($category, 200);

       
        $data = DB::table('categories')
            ->leftjoin('sub_categories', 'sub_categories.category_id', '=', 'categories.id')
            ->leftjoin('sub_sub_categories', 'sub_sub_categories.sub_category_id', '=', 'sub_categories.id')
            ->leftjoin('child_categories', 'child_categories.sub_sub_category_id', '=', 'sub_sub_categories.id')
            ->leftjoin('grand_child_categories', 'grand_child_categories.child_category_id', '=', 'child_categories.id')
            ->orwhere('categories.category_name', 'LIKE', "%{$value}%")
            ->orwhere('sub_categories.sub_category_name', 'LIKE', "%{$value}%")
            ->orwhere('sub_sub_categories.sub_sub_category_name', 'LIKE', "%{$value}%")
            ->orwhere('child_categories.child_category_name', 'LIKE', "%{$value}%")
            ->orwhere('grand_child_categories.grand_child_category_name', 'LIKE', "%{$value}%")
            ->get();
        return response()->json($data, 201);
    }
}
