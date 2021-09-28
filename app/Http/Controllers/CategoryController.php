<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $validated = $request->validated();

        // $validator  = $request->validate([
        //     'category_name'  => 'required|unique:categories',
        //     'slug'      => 'required',
        //     'category_priority'     => 'required'
        // ]);

        $category = new Category();
        $requested_data = $request->all();
        $category->status = 1;
        $category->fill($requested_data)->save();
        Toastr::success('Category Created Successfully',"Success");
        return redirect()->route('category.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $cat_status = Category::findOrFail($id);
        // if ($cat_status->status == 0) {
        //     $cat_status->status = 1;
        // } else {
        //     $cat_status->status = 0;
        // }
        $cat_status->status=$status;
        $cat_status->save();
        // Toastr::success('Status Change Successfully', 'Success');
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = new Category();
        $validated = $request->validated();
        // $validation=Validator::make($request->all(),[
        //     'category_name'  => 'required|unique:categories,category_name,'.$id,
        //     'slug'      => 'required',
        //     'category_priority'     => 'required'
        // ]);
        // if ($validation->fails()) {
        //     return back()->withInput()->withErrors($validation);
        // }

        $cat_update = Category::findOrFail($id);
        $formData = $request->all();

        $cat_update->fill($formData)->save();
        Toastr::success('Category Updated Successfully','Success');
        return redirect()->route('category.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat_delete = Category::findOrFail($id);

        $cat_delete->delete();

        return response()->json();
    }
}
