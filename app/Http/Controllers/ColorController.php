<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Requests\ColorRequest;
use Brian2694\Toastr\Facades\Toastr;
use Validator;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::orderBy('id', 'desc')->paginate();
        return view('backend.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.color.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        // $validated = $request->validated();
        // $validator  = $request->validate([
        //     'color_code'  => 'required|unique:colors',
        //     'color_name'      => 'required',
        // ]);

        $color = new Color();
        $requested_data = $request->all();
        $color->status = 1;
        $color->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('color-code.list')
            ->with('success', 'Color created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $color_status = Color::findOrFail($id);
        $color_status->status=$status;
        $color_status->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('backend.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, $id)
    {
        // $validation=Validator::make($request->all(),[
        //     'color_code'  => 'required|unique:colors,color_code,'.$id,
        //     'color_name'     => 'required'
        // ]);
        // if ($validation->fails()) {
        //     return back()->withInput()->withErrors($validation);
        // }

        $update = Color::findOrFail($id);
        $formData = $request->all();

        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('color-code.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Color::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
