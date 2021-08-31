<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(){
        $products = Category::has('product')
            ->with(['product' => function($q) {
                $q->orderBy('id', 'desc');
            }])
            ->where('status', 1)
            ->orderBy('category_priority','asc')
            ->paginate(5)
            ->map(function( $category ){
                $category->product = $category->product->take(6);
            return $category;
        });
        //dd($products);
        return view('fontend.pages.home', compact('products'));
    }


    public function zoom(){
        return view('fontend.pages.zoomlense');
    }

    public function vendor(){
        return view('fontend.pages.vendor');
    }
    public function campaign(){
        return view('fontend.pages.campaign');
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
