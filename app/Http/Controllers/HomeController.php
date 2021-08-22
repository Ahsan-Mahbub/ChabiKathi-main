<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home(){
        $slider = Slider::get();
        return view('fontend.pages.home', compact('slider'));
    }
    public function product(){
        return view('fontend.pages.product');
    }
    public function vendor(){
        return view('fontend.pages.vendor');
    }
    public function campaign(){
        return view('fontend.pages.campaign');
    }
    public function allproduct(){
        return view('fontend.pages.category_all_product');
    }
    public function cart(){
        return view('fontend.pages.cart');
    }
    public function checkout(){
        return view('fontend.pages.checkout');
    }
    public function marchentlogin(){
        return view('fontend.pages.marchent_login');
    }
    public function marchentregistration(){
        return view('fontend.pages.marchent_registration');
    }
}
