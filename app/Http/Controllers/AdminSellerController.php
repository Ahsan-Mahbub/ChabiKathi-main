<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Brian2694\Toastr\Facades\Toastr;

class AdminSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::orderBy('id', 'desc')->paginate();
        return view('backend.seller.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator  = $request->validate([
        //     'first_name'  => 'required',
        //     'last_name'  => 'required',
        //     'email'  => 'required|unique:users',
        //     'contact'  => 'required|min:11|numeric',
        //     'shop_name'  => 'required',
        //     'shop_address'  => 'required',
        //     'password'  => 'required',
        // ]);
        // $seller = new Product();
        // $requested_data = $request->all();
        // $seller->status = 1;
        // $seller->approve = 1;
        // $seller->token = '';
        // $seller->password = Hash::make($request->password);

        // if ($request->hasFile('shop_logo')) {
        //     Helper::delete($seller->shop_logo);
        //     $extension = $request->file('shop_logo')->getClientOriginalExtension();
        //     $name = 'image' . Str::random(5) . '.' . $extension;
        //     $path = "asset/backend/assets/images/shop/";
        //     $request->file('shop_logo')->move($path, $name);
        //     $requested_data['shop_logo'] = $path . $name;
        // }
        // //dd($requested_data);
        // $product->fill($requested_data)->save();
        // Toastr::success('Save Successfully');
        // return redirect()->route('seller.list')
        //     ->with('success', 'Seller created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $status = Seller::findOrFail($id);
        if ($status->status == 0) {
            $status->status = 1;
        } else {
            $status->status = 0;
        }
        $status->save();
        Toastr::success('Seller Status Change Successfully', 'Success');
        return redirect()->back();
    }


    public function approval($id)
    {
        $approval = Seller::findOrFail($id);
        $approval->approve = 1;
        $approval->save();
        Toastr::success('Seller Approved', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Seller::findOrFail($id);

        $delete->delete();

        return response()->json();
    }
}
