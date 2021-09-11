<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Validation\Rules\Password;
use Hash;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\Reset_password;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{

    public function loginView()
    {
        return view('seller.login');
    }

    public function  login(Request $request)
    {
       
        $this->validate($request, [
            'email' => 'required',
            'password' => ''
        ]);
        
        $seller=Seller::where(['email' => $request['email']])->first(['status','email_verified']);
       
        if(isset($seller)&& $seller['status']==1 && $seller['email_verified']==1 && auth('seller')->attempt(['email' => $request->email, 'password'=>$request->password]))
        
        {
            Toastr::success('Login Successfully', 'Success');
            return redirect('/seller/dashboard');
            
        }
     

        elseif(isset($seller)&& $seller['status']==0 && $seller['email_verified']==1 && auth('seller')->attempt(['email' => $request->email, 'password'=>$request->password]))
        {
            Toastr::success('please wait until admin approve your request', 'Error');
            return redirect()->back();
        }
        elseif(isset($seller)&& $seller['status']==0 && $seller['email_verified']==0 && auth('seller')->attempt(['email' => $request->email, 'password'=>$request->password]))
        {
            Toastr::success('please verify your email address ', 'Error');
            return redirect()->back();
        }
        else{
            return 'you didnot register yet! please register first';
        }
       
    }


}