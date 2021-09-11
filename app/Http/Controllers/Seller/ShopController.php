<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Str;
use App\Helpers\Helper;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_view()
    {
        return view('seller.shop.index');
    }

    public function update(Request $request){

        $shop=new Shop;
        $shop->shop_name=$request->shop_name;
        $shop->seller_id=auth('seller')->user()->id;
        $shop->status=1;
        $shop->approval=1;

        if ($request->hasFile('image')) {
            Helper::delete($shop->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/seller/assets/images/shop/";
            $request->file('image')->move($path, $name);
            $requested_data['image'] = $path . $name;
        }
       
        $shop->save();


    }
}
