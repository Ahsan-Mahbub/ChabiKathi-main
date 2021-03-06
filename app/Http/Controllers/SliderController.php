<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Toastr;
use App\Http\Requests\SliderRequest;

use File;
use App\Helpers\Helper;
use Str;
use Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        // $validator  = $request->validate([
        //     'slider_name'  => 'required',
        //     'slider_link'  => 'required',
        // ]);

        $slider = new Slider();
        $formData = $request->all();
        $slider->status = 1;
        if ($request->hasFile('slider_img')) {
            $extension = $request->file('slider_img')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/slider/";
            $request->file('slider_img')->move($path, $name);
            $formData['slider_img'] = $path . $name;
        }
        $slider->fill($formData)->save();
        Toastr::success('Slider Create Successfully', 'Success');
        return redirect()->route('slider.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function status($id,$status)
    {
        $slider_status = Slider::findOrFail($id);
        $slider_status->status=$status;
        $slider_status->save();
        return response()->json(['message'=>'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $update = Slider::findOrFail($id);
        $formData = $request->all();
        if ($request->hasFile('slider_img')) {
            Helper::delete($update->slider_img);
            $extension = $request->file('slider_img')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/slider/";
            $request->file('slider_img')->move($path, $name);
            $formData['slider_img'] = $path . $name;
        }
        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('slider.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Slider::findOrFail($id);
        $delete->delete();
        return response()->json();
    }
}
