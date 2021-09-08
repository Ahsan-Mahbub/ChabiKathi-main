<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::orderBy('id', 'desc')->paginate();
        return view('backend.sub-category.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sub-category.create');
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
            'sub_category_name'  => 'required|unique:sub_categories',
            'category_id' => 'required',
            'slug'      => 'required',
        ]);

        $sub_category = new SubCategory();
        $requested_data = $request->all();
        $sub_category->status = 1;
        // dd($sub_category);
        $sub_category->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('sub-category.list')
            ->with('success', 'Sub Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $s_cat_status = SubCategory::findOrFail($id);
        if ($s_cat_status->status == 0) {
            $s_cat_status->status = 1;
        } else {
            $s_cat_status->status = 0;
        }
        $s_cat_status->save();
        Toastr::success('Status Change Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        return view('backend.sub-category.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $category = new SubCategory();
        $validation=Validator::make($request->all(),[
            'sub_category_name'  => 'required|unique:sub_categories,sub_category_name,'.$id,
            'category_id'      => 'required',
            'slug'     => 'required'
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $s_cat_update = SubCategory::findOrFail($id);
        $formData = $request->all();

        $s_cat_update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('sub-category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scat_delete = SubCategory::findOrFail($id);

        $scat_delete->delete();

        return response()->json();
    }
}
