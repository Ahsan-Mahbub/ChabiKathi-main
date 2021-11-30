<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
            'brand_name'      => 'required|unique:brands',
            'slug'      => 'required|unique:brands',
        ]);

        $brand = new Brand();
        $requested_data = $request->all();
        $brand->status = 1;
        $brand->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('brand.list')
            ->with('success', 'Seller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function status($id, $status)
    {
        $brand_status = Brand::findOrFail($id);
        $brand_status->status=$status;
        $brand_status->save();
        return response()->json(['message'=>'success']);
    }

    // public function approval($id)
    // {
    //     $approval = Brand::findOrFail($id);
    //     $approval->approval = 1;
    //     $approval->save();
    //     Toastr::success('Brand Approved', 'Success');
    //     return redirect()->back();
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation=Validator::make($request->all(),[
            'brand_name'      => 'required',
            'slug'      => 'required|unique:brands,slug,'.$id,
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $update = Brand::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('brand.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Brand::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
