<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Shop;
use Illuminate\Validation\Rules\Password;
use Hash;
use Illuminate\Support\Facades\Auth;
use File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\Reset_password;
use App\Mail\VerificationEmail;
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
    $seller->contact = $request->contact;
    $seller->email = $request->email;
    $seller->password = bcrypt($request->password);
    $seller->status = 1;
    $seller->approve = 0;
    $seller->token=$token = Str::random(60);
    $seller->save();

    $shop = new Shop;
    $shop->shop_name=$request->shop_name;
    $shop->seller_id=$seller->id;
    $shop->status=1;
    $shop->approval=1;
    $shop->save();
    
    Mail::to($seller->email)->send(new VerificationEmail($seller));

    session()->flash('message', 'Please check your email to activate your account');
   
    return redirect()->back();
    
        

}
public function forget()
{
    return view('template.forget_password');
}

// public function sendlink(Request $request)
// {
//     $request->validate($request, [
//         'email' => 'required|email'
      
//     ]);
    
//     $seller=Seller::where('email' , $request->email)->first(['status']);
//     if($seller)&& $seller['status']==1
//     {
//         $reset_code=str::random(100)
//         passwordrese::create([
//             'seller_id'=$seller->id,
//             'reset_code'=$reset_code
//         ]);
//     }
    
// }

public function forgotPasswordValidate($token)
{
    $seller = Seller::where('token', $token)->where('status', 1)->first();
    if ($seller) {
        $email = $seller->email;
        return view('template.change_password', compact('email'));
    }
    return redirect()->route('seller.forget')->with('failed', 'Password reset link is expired');
}

public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $seller = Seller::where('email', $request->email)->first();
        if (!$seller) {
            return back()->with('failed', 'Failed! email is not registered.');
        }

        $token = Str::random(60);

        $seller['token'] = $token;
        $seller['status'] = 1;
        $seller->save();

        Mail::to($request->email)->send(new Reset_password($seller->first_name, $token));
        

        if(Mail::failures() != 0) {
            return back()->with('success', 'Success! password reset link has been sent to your email');
        }
        return back()->with('failed', 'Failed! there is some issue with email provider');
    }

    public function updatePassword(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        $seller = Seller::where('email', $request->email)->first();
        if ($seller) {
            $seller['status'] = 1;
            $seller['token'] = '';
            $seller['password'] = bcrypt($request->password);
            $seller->save();
            return redirect()->route('seller.loginView')->with('success', 'Success! password has been changed');
        }
        return redirect()->route('seller.forget')->with('failed', 'Failed! something went wrong');
    }

    public function VerifyEmail($token=null)
    {
        
    	if($token == null) {

    		session()->flash('message', 'Invalid Login attempt');

    		return redirect()->route('seller.loginView');

    	}

       $seller = Seller::where('token',$token)->first();
        
       if($seller == null ){
        
       	session()->flash('message', 'Invalid Login attempt');

        return redirect()->route('seller.loginView');

       }
       else{
        

        $seller->email_verified = 1;
        $seller->token='   ';
        $seller->email_verified_at= Carbon::now();
        $seller->update();
        
       
           session()->flash('message', 'Your account is activated, you can log in now');

        return redirect()->route('seller.loginView');
       }

      
       
       	

    }

}
      

