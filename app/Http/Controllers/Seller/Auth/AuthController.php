<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Validation\Rules\Password;
use Hash;
use Illuminate\Support\Facades\Auth;
use File;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    public function register()
{
    return view('seller.register');
    Toastr::success('Save Successfully');
    return redirect()->back();
    
}

public function store(Request $request)
{
  
    try {
        $this->validate($request, [
            'email' => 'required|unique:sellers',
            'password' => 'required|min:6'
        ]);
    } catch (Exception $e) {

    }
    $seller = new Seller();
    $seller->first_name = $request->first_name;
    $seller->last_name = $request->last_name;
    $seller->shop_name = $request->shop_name;
    $seller->shop_address = $request->shop_address;
    $seller->contact = $request->contact;
    $seller->email = $request->email;
    $seller->password = bcrypt($request->password);
    $seller->status = 0;
    $seller->approve = 0;
    $seller->save();
    
    Toastr::success('Seller registration successfully! please wait until admin approve', 'Success');
   
    return redirect()->back();
        

}

      
}
