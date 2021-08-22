<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Toastr;
use File;
use App\Helpers\Helper;
use Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::first();
        return view('backend.slider.slider',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        if ($request->hasFile('slider_img_2')) {
            Helper::delete($update->slider_img_2);
            $extension = $request->file('slider_img_2')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/slider/";
            $request->file('slider_img_2')->move($path, $name);
            $formData['slider_img_2'] = $path . $name;
        }

        if ($request->hasFile('slider_img_3')) {
            Helper::delete($update->slider_img_3);
            $extension = $request->file('slider_img_3')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/slider/";
            $request->file('slider_img_3')->move($path, $name);
            $formData['slider_img_3'] = $path . $name;
        }
        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
