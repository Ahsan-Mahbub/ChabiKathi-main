<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use File;
use App\Models\Seller;
use Brian2694\Toastr\Facades\Toastr;

class ProfileController extends Controller
{
    public function index(){

        return view('seller.profile.index');
    }

    // public function authcheck()
    // {
    //     $seller=Auth::where('id')->first();
    // }

    public function profile_update(Request $request)
    
    {
        
        // if($request->hasFile('banner')) {
        //     if($request->banner!=''){
        //         unlink($request->banner);
        //     }
        //     $image_type = $request->file('banner')->getClientOriginalExtension();
        //     $path = "asset/backend/assets/images/seller/";
        //     $name = 'seller_'.time().".".$image_type;
        //     $image = $request->file('banner')->move($path,$name);

            if($request->hasFile('banner')) {
                if($request->old_img!=''){
                    unlink($request->old_img);
                }
                $image_type = $request->file('banner')->getClientOriginalExtension();
                $path = "asset/backend/assets/images/seller/";
                $name = 'seller_'.time().".".$image_type;
                $image = $request->file('banner')->move($path,$name);
            
            $data = [
                'first_name'   => $request->first_name,
                'last_name'   => $request->last_name,
                'contact'=> $request->contact,
                'banner'  =>$image,
            ];
        }elseif ($request->password) {
    		$data = [
                'first_name'   => $request->first_name,
                'last_name'   => $request->last_name,
                'contact'=> $request->contact,
                'banner'  =>$image,
                'password'=> bcrypt($request->password),
            ];
    	} else {
        	$data = [
                'first_name'   => $request->first_name,
                'last_name'   => $request->last_name,
                'contact'=> $request->contact,
                'password' => auth('seller')->user()->password,
            ];
        }
        
        Seller::where('id', auth('seller')->user()->id)->update($data);
        Toastr::success('Profile Update Successfully');
        return back();
    }
}
