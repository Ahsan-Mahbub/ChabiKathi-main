<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use File;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    public function index(){
        return view('backend.profile.index');
    }
    public function store(Request $request){
        if($request->hasFile('image')) {
            if($request->old_img!=''){
                unlink($request->old_img);
            }
            $image_type = $request->file('image')->getClientOriginalExtension();
            $path = "asset/backend/assets/images/BackendUser/";
            $name = 'user_'.time().".".$image_type;
            $image = $request->file('image')->move($path,$name);
            
            $data = [
                'name'   => $request->name,
                'phone'=> $request->phone,
                'image'  => $image,
            ];
        }elseif ($request->password) {
            $data = [
                'name'   => $request->name,
                'phone'=> $request->phone,
                'password'=> Hash::make($request->password),
            ];
        } else {
            $data = [
                'name'   => $request->name,
                'phone'=> $request->phone,
                'password' => Auth::user()->password,
            ];
        }
        
        User::where('id', Auth::user()->id)->update($data);
        Toastr::success('Profile Update Successfully');
        return back();
    }
}
