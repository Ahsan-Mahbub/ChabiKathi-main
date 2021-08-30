<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Validation\Rules\Password;
use Hash;
use Auth;
use File;
use Brian2694\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    public function register()
{
    return view('fontend.seller.register');
    Toastr::success('Save Successfully');
    return redirect()->back();
    
}

public function store(Request $request)
{

    $seller = new Seller();
    $requested_data = $request->all();
    $seller->password = bcrypt($request->password);
    $seller->fill($requested_data)->save();
    Toastr::success('Save Successfully');
    return redirect()->back()
        ->with('success', 'Brand created successfully.');
//    if($request->password && $request-> c_password ){
//     $seller = new Seller();
//     $seller->save();
//    }
//     $request->validate([
//         'password' =>  ['required', 'confirmed', Password::min(8)->numbers()],
//         'c_password' => ['required'],]);
//     try {
//         $this->validate($request, [
//             'email' => 'required|unique:sellers',
//         ]);
//     } catch (Exception $e) {

//     }
//     $seller = new Seller();
//     $seller->first_name = $request->first_name;
//     $seller->last_name = $request->last_name;
//     $seller->shop_name = $request->shop_name;
//     $seller->shop_address = $request->shop_address;
//     $seller->contact = $request->contact;
//     $seller->email = $request->email;
//     $seller->password = bcrypt($request->password);
//     $seller->status = 0;
//     $seller->approve = 0;
//     $seller->save();
    
//     Toastr::success('Save Successfully');
//     return redirect()->back()
//         ->with('success', 'Seller registration successfully.');

}

    public function login()
{
    return view('fontend.seller.login');
}

public function save()
{
    $seller=Seller::all();
}

public function index()
    {
        if (Auth::guard('login')->check()) {
            // return redirect()->to('/merchant_dashboard');
            if (Auth::guard('login')->user()->type == 1) {
                return redirect()->to('/reseller_dashboard');
            } else {
                return redirect()->to('/merchant_dashboard');
            }
        } else {
            return view('frontend.pages.loginpage');
        }
    }

    public function login(Request $request)
    {
        $credentials = [
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::guard('login')->attempt($credentials)) {
            $notification = [
                'message'    => 'logged in successfully',
                'alert-type' => 'success',
            ];

            if (Auth::guard('login')->user()->type == 1) {
                return Redirect("/reseller_dashboard")->with($notification);
            } else {
                return Redirect("/merchant_dashboard")->with($notification);
            }
        } else {
            $notification = [
                'message'    => 'login failed',
                'alert-type' => 'warning',
            ];
            return Redirect('/userlogin')->with($notification);
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('login')->logout();
        $notification = [
            'message'    => 'logged out successfully',
            'alert-type' => 'success',
        ];
        return redirect('/userlogin')->with($notification);
    }
   
}
