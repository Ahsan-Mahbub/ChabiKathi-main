<?php

namespace App\Http\Controllers;

use App\Models\SubSubCategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubcategories = SubSubCategory::orderBy('id', 'desc')->paginate();
        return view('backend.sub-sub-category.index', compact('subsubcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sub-sub-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validator  = $request->validate([
            'sub_sub_category_name'  => 'required|unique:sub_sub_categories',
            'subCategory_id' => 'required',
            'slug'      => 'required',
        ]);

        $sub_sub_category = new SubSubCategory();
        $requested_data = $request->all();
        $sub_sub_category->status = 1;
        // dd($sub_sub_category);
        $sub_sub_category->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('sub-sub-category.list')
            ->with('success', 'Sub Sub Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $S_status = SubSubCategory::findOrFail($id);
        $S_status->status =$status;
        $S_status->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subsubcategory = SubSubCategory::findOrFail($id);
        return view('backend.sub-sub-category.edit', compact('subsubcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation=Validator::make($request->all(),[
            'sub_sub_category_name'  => 'required|unique:sub_sub_categories,sub_sub_category_name,'.$id,
            'subCategory_id'      => 'required',
            'slug'     => 'required'
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $s_cat_update = SubSubCategory::findOrFail($id);
        $formData = $request->all();

        $s_cat_update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('sub-sub-category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubSubCategory  $subSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = SubSubCategory::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
