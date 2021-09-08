<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::orderBy('id', 'desc')->paginate();
        return view('backend.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.size.create');
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
            'size_name'  => 'required|unique:sizes',
        ]);

        $size = new Size();
        $requested_data = $request->all();
        $size->status = 1;
        $size->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('size.list')
            ->with('success', 'Size created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $status = Size::findOrFail($id);
        if ($status->status == 0) {
            $status->status = 1;
        } else {
            $status->status = 0;
        }
        $status->save();
        Toastr::success('Status Change Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = Size::findOrFail($id);
        return view('backend.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation=Validator::make($request->all(),[
            'size_name'  => 'required|unique:sizes,size_name,'.$id,
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $update = Size::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('size.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Size  $size
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Size::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
