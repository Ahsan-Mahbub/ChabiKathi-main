<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use Illuminate\Http\Request;
use App\Http\Requests\ChildCategoryRequest;
use Brian2694\Toastr\Facades\Toastr;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childcategories = ChildCategory::orderBy('id', 'desc')->get();
        return view('backend.child-category.index', compact('childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.child-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChildCategoryRequest $request)
    {
        $child_category = new ChildCategory();
        $requested_data = $request->all();
        $child_category->status = 1;
        $child_category->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('child-category.list')
            ->with('success', 'Child Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $S_status = ChildCategory::findOrFail($id);
        $S_status->status =$status;
        $S_status->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $childcategory = ChildCategory::findOrFail($id);
        return view('backend.child-category.edit', compact('childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ChildCategoryRequest $request, $id)
    {
        $update = ChildCategory::findOrFail($id);
        $formData = $request->all();
        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('child-category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildCategory  $childCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ChildCategory::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
