<?php

namespace App\Http\Controllers\Seller;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Shop;
use Toastr;
use File;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use App\Http\Resources\ProductCollection;
use Str;
use Validator;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::orderBy('id', 'desc')->where('seller_id',auth('seller')->user()->id)->paginate(5);
        return view('seller.product.index', compact('products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status',1)->get();
        $shop = Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->where('approval',1)->first();
        return view('seller.product.create', compact('category','shop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
        $product = new Product();
        $requested_data = $request->all();
        $product->status = 1;
        $product->approval = 0;
        $product->slug = $request->slug;
        $product->sku .= 'sku-' . $request->product_name . '-'.time();
        $product->shop_id=auth('seller')->id();
        

        if ($request->hasFile('product_img')) {
            $extension = $request->file('product_img')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/seller/assets/images/product/";
            $request->file('product_img')->move($path, $name);
            $requested_data['product_img'] = $path . $name;
        }

        if ($request->hasFile('product_img_2')) {
            $extension = $request->file('product_img_2')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/seller/assets/images/product/";
            $request->file('product_img_2')->move($path, $name);
            $requested_data['product_img_2'] = $path . $name;
        }

        if ($request->hasFile('product_img_3')) {
            $extension = $request->file('product_img_3')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/seller/assets/images/product/";
            $request->file('product_img_3')->move($path, $name);
            $requested_data['product_img_3'] = $path . $name;
        }

        // dd($requested_data);
        $save = $product->fill($requested_data)->save();
        if($save){
            Toastr::success('Product Create Successfully', 'Success');
            return redirect()->route('seller.product.list');
        }else{
            Toastr::warning('Product Did Not Create Successfully', 'Damage');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('seller.product.show', compact('product'));
    }

    public function status($id,$status)
    {
        $product_status = Product::findOrFail($id);
        $product_status->status =$status;
        $product_status->save();
        return response()->json(['message'=>'success']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::where('status',1)->get();
        $shop = Shop::where('seller_id',auth('seller')->user()->id)->where('status',1)->where('approval',1)->first();
        return view('seller.product.edit', compact('product','category','shop'));


        $product = Product::findOrFail($id);
        return view('seller.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {

        $update = Product::findOrFail($id);
        $update->slug = $request->slug;
        $formData = $request->all();
        if ($request->hasFile('product_img')) {
            Helper::delete($update->product_img);
            $extension = $request->file('product_img')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img')->move($path, $name);
            $formData['product_img'] = $path . $name;
        }

        if ($request->hasFile('product_img_2')) {
            Helper::delete($update->product_img_2);
            $extension = $request->file('product_img_2')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img_2')->move($path, $name);
            $formData['product_img_2'] = $path . $name;
        }

        if ($request->hasFile('product_img_3')) {
            Helper::delete($update->product_img_3);
            $extension = $request->file('product_img_3')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img_3')->move($path, $name);
            $formData['product_img_3'] = $path . $name;
        }
        $updated = $update->fill($formData)->save();
        if($updated){
            Toastr::success('Product Update Successfully', 'Success');
            return redirect()->route('seller.product.list');
        }else{
            Toastr::danger('Updated Not Successfully', 'Damage');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_delete = Product::findOrFail($id);

        $product_delete->delete();

        return response()->json();
    }
}
