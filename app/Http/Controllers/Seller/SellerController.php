<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Hash;
use Auth;
use File;

class SellerController extends Controller
{
    public function register()
{
    return view('fontend.seller.register');
}
   
}
