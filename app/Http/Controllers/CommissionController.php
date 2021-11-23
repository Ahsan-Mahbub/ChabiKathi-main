<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommisionRequest;
use App\Models\Commission;
use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commissions = Commission::orderBy('id', 'desc')->get();
        return view('backend.commission.index', compact('commissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('backend.commission.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommisionRequest $request)
    {
        // $validator  = $request->validate([
        //     'commission'  => 'required',
        //     'category_id' => 'required|unique:commissions',
        // ]);

        $store = new Commission();
        $requested_data = $request->all();
        $store->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('commission.list')
            ->with('success', 'commission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function show(Commission $commission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::get();
        $commission = Commission::findOrFail($id);
        return view('backend.commission.edit', compact('commission','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function update(CommisionRequest $request, $id)
    {
        // $validation=Validator::make($request->all(),[
        //     'category_id' => 'required|unique:commissions,category_id,'.$id,
        //     'commission'  => 'required',
        // ]);
        // if ($validation->fails()) {
        //     return back()->withInput()->withErrors($validation);
        // }

        $update = Commission::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('commission.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commission  $commission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Commission::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
