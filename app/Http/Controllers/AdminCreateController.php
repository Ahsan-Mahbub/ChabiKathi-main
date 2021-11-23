<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdmincreateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use App\Http\Resources\ProductCollection;
use Str;
use Hash;
use Validator;

class AdminCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::orderBy('id', 'desc')->get();
        return view('backend.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdmincreateRequest $request)
    {
        // $validator  = $request->validate([
        //     'name'  => 'required',
        //     'email'  => 'required|unique:users',
        //     'phone'  => 'required|min:11|numeric',
        //     'password'  => 'required',
        // ]);

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/BackendUser/";
            $image = $request->file('image')->move($path, $name);
        }

        $data = [
            'name'   => $request->name,
            'email'   => $request->email,
            'phone'=> $request->phone,
            'role'   => $request->role,
            'image'  => $image,
            'password'=> Hash::make($request->password),
        ];
        // dd($data);
        User::insert($data); 
        Toastr::success('Save Successfully');
        return redirect()->route('admin.list')
            ->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function status($id)
    // {
    //     $status = User::findOrFail($id);
    //     if ($status->status == 0) {
    //         $status->status = 1;
    //     } else {
    //         $status->status = 0;
    //     }
    //     $status->save();
    //     Toastr::success('Status Change Successfully', 'Success');
    //     return redirect()->back();
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('backend.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdmincreateRequest $request, $id)
    {
        // $validator  = $request->validate([
        //     'name'  => 'required',
        //     'phone'  => 'required|min:11|numeric',
        // ]);

        // $update = User::findOrFail($id);
        // $formData = $request->all();
        // if ($request->hasFile('image')) {
        //     Helper::delete($update->image);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $name = 'image' . Str::random(5) . '.' . $extension;
        //     $path = "asset/backend/assets/images/product/";
        //     $request->file('image')->move($path, $name);
        //     $formData['image'] = $path . $name;
        // }
        // $update->fill($formData)->save();

        // Toastr::success('Update Successfully');
        // return redirect()->route('admin.list')
        //     ->with('success', 'Admin Update successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::findOrFail($id);

        $delete->delete();

        return response()->json();
    }
}
