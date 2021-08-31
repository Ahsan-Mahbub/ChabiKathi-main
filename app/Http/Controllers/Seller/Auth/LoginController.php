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
        
        $seller=Seller::where(['email' => $request['email']])->first(['status']);
        if(isset($seller)&& $seller['status']==1 && auth('seller')->attempt(['email' => $request->email, 'password'=>$request->password]))
        
        {
            Toastr::success('Login Successfully', 'Success');
            return view('seller.content');
        }
        elseif(isset($seller)&& $seller['status']==1 && auth('seller')->attempt(['email' => $request->email, 'password'=>$request->password]))
        
        {
            return 'please wait until admin approve your request so that';
        }

        elseif(isset($seller)&& $seller['status']==0)
        {
            Toastr::success('please wait until admin approve your request', 'Error');
            return redirect()->back();
        }
        
        else{
            return 'you didnot register yet! please register first';
        }
       
    }


}