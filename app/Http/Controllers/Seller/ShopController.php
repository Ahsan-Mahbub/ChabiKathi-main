<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Seller;
use Str;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Toastr;

class ShopController extends Controller
{
    public function shop_view()
    {
        $shop=Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->first();
        return view('seller.shop.index',compact('shop'));
    }

    public function update(Request $request, $id)
    {
        if($request->hasFile('image')) {
            if($request->old_img!=''){
                unlink($request->old_img);
            }
            $image_type = $request->file('image')->getClientOriginalExtension();
            $path = "asset/backend/assets/images/seller/";
            $name = 'shop'.time().".".$image_type;
            $image = $request->file('image')->move($path,$name);

            $shop=Shop::find($id);
            $shop->shop_name=$request->shop_name;
            $shop->seller_id=auth('seller')->user()->id;
            $shop->slug=$request->slug;
            $shop->image=$image;

            $shop->save();
            return redirect()->back();

        }
    }
    // public function holiday($id)
    // {
    //     $seller_holiday = Shop::findOrFail($id);
    //     if ($seller_holiday->holiday == 1) :
    //         $seller_holiday->update(["holiday" => 0]);
    //     $status = 201; else :
    //         $seller_holiday->update(["holiday" => 1]);
    //     $status = 200;
    //     endif;
    //     return response()->json($seller_holiday, $status);
    // }

    public function holiday($id){
        $seller_holiday = Shop::findOrFail($id);
        if ($seller_holiday->holiday == 0) {
            $seller_holiday->holiday = 1;
            $seller_holiday->save();
            Toastr::success('Regular Mood is On', 'Success');
        } else {
            $seller_holiday->holiday = 0;
            $seller_holiday->save();
            Toastr::warning('Holiday Mood is On', 'Success');
        }
        return redirect()->back();        
    }

}