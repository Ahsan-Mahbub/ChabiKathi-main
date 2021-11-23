<?php

namespace App\Http\Controllers;

use App\Models\GrandChildCategory;
use Illuminate\Http\Request;
use App\Http\Requests\GrandChildCategoryRequest;
use Brian2694\Toastr\Facades\Toastr;

class GrandChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $g_childcategories = GrandChildCategory::orderBy('id', 'desc')->get();
        return view('backend.grand-child-category.index', compact('g_childcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.grand-child-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrandChildCategoryRequest $request)
    {
        $g_child_category = new GrandChildCategory();
        $requested_data = $request->all();
        $g_child_category->status = 1;
        $g_child_category->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('grand-child-category.list')
            ->with('success', 'Grand Child Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GrandChildCategory  $grandChildCategory
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $S_status = GrandChildCategory::findOrFail($id);
        $S_status->status =$status;
        $S_status->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GrandChildCategory  $grandChildCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $g_childcategory = GrandChildCategory::findOrFail($id);
        return view('backend.grand-child-category.edit', compact('g_childcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrandChildCategory  $grandChildCategory
     * @return \Illuminate\Http\Response
     */
    public function update(GrandChildCategoryRequest $request, $id)
    {
        $update = GrandChildCategory::findOrFail($id);
        $formData = $request->all();
        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('grand-child-category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GrandChildCategory  $grandChildCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = GrandChildCategory::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
