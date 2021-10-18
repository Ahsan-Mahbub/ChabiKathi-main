<?php

namespace App\Http\Controllers\fontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Stock;

class HomeController extends Controller
{
    // public function category(){
    //     $categories = Category::with(['subcategory' => function($q) {
    //             $q->with('subsubcategory')->where('status',1)->orderBy('id', 'desc');
    //         }])->where('status',1)->orderBy('id', 'desc')->get();
    //     // $categories = SubCategory::with(['subsubcategory'])->where('status',1)->orderBy('id', 'desc')->get();
    //     // dd($categories);
    //     return view('fontend.layouts.header',compact('categories'));
    // }
    public function home(){
        $products = Category::has('product')
            ->with(['product' => function($q) {
                $q->with(['stock' => function($m){
                    $m->groupBy('product_id')->selectRaw('sum(quantity) as sum, product_id')->where('status',1)->where('approval',1);
                }])->where('status',1)->where('approval',1)->orderBy('id', 'desc');
            }])
            ->where('status', 1)
            ->orderBy('category_priority','asc')
            ->paginate(5)
            ->map(function( $category ){
                $category->product = $category->product->take(6);
            return $category;
        });

        //dd($products);

        $shops = Shop::where('status',1)->where('approval',1)->where('holiday',1)->paginate(6);
        // dd($shops);
        // $products = Category::has('product')
        //     ->with(['product' => function($q) {
        //         $q->where('status',1)->where('approval',1)->orderBy('id', 'desc');
        //     }])
        //     ->where('status', 1)
        //     ->orderBy('category_priority','asc')
        //     ->paginate(5)
        //     ->map(function( $category ){
        //         $category->product = $category->product->take(6);
        //     return $category;
        // });

        // $stocks = Stock::groupBy('product_id')
        //     ->selectRaw('sum(quantity) as sum, product_id')
        //     ->get();
        // dd($stocks);
        return view('fontend.pages.home', compact('products','shops'));
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
