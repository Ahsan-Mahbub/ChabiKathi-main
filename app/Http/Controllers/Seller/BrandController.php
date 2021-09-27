<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Shop;
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
        $brands = Brand::orderBy('id', 'desc')->where('seller_id',auth('seller')->user()->id)->paginate();
        return view('seller.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop = Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->where('approval',1)->first();
        return view('seller.brand.create',compact('shop'));
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
            'brand_name'      => 'required',
            'slug'      => 'required|unique:brands',
        ]);

        $brand = new Brand();
        $requested_data = $request->all();
        $brand->status = 1;
        $brand->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('seller.brand.list')
            ->with('success', 'Seller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $brand_status = Brand::findOrFail($id);
        // if ($status->status == 0) {
        //     $status->status = 1;
        // } else {
        //     $status->status = 0;
        // }
        $brand_status->status=$status;
        $brand_status->save();
        // Toastr::success('Status Change Successfully', 'Success');
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->where('approval',1)->first();
        $brand = Brand::findOrFail($id);
        return view('seller.brand.edit', compact('brand','shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        return redirect()->route('seller.brand.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Brand::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
