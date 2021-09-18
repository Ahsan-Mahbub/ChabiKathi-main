<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Shop;
use Illuminate\Http\Request;
use Toastr;
use File;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use App\Http\Resources\ProductCollection;
use Str;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('status',1)->get();
        $shop = Shop::where('status',1)->where('approval',1)->get();
        return view('backend.product.create', compact('category','shop'));
    }

    public function subcategory($id)
    {
        $subcategories = SubCategory::where('category_id', $id)->get();
        return response()->json($subcategories, 200);
    }

    public function brand($id)
    {
        $brand = Brand::where('shop_id', $id)->where('status',1)->where('approval',1)->get();
        return response()->json($brand, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator  = $request->validate([
            'product_name'  => 'required|unique:products',
            'product_slug'  => 'required',
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
            'shop_id' => 'required',
        ]);
        $product = new Product();
        $requested_data = $request->all();
        $product->status = 1;
        $product->approval = 0;
        $product->sku .= 'sku-' . $product->product_name.time();

        if ($request->hasFile('product_img')) {
            $extension = $request->file('product_img')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img')->move($path, $name);
            $requested_data['product_img'] = $path . $name;
        }

        if ($request->hasFile('product_img_2')) {
            $extension = $request->file('product_img_2')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img_2')->move($path, $name);
            $requested_data['product_img_2'] = $path . $name;
        }

        if ($request->hasFile('product_img_3')) {
            $extension = $request->file('product_img_3')->getClientOriginalExtension();
            $name = 'image' . Str::random(5) . '.' . $extension;
            $path = "asset/backend/assets/images/product/";
            $request->file('product_img_3')->move($path, $name);
            $requested_data['product_img_3'] = $path . $name;
        }
        //dd($requested_data);
        $product->fill($requested_data)->save();
        Toastr::success('Save Successfully');
        return redirect()->route('product.list')
            ->with('success', 'Product created successfully.');
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
        return view('backend.product.show', compact('product'));
    }

    public function status($id)
    {
        $product_status = Product::findOrFail($id);
        if ($product_status->status == 0) {
            $product_status->status = 1;
        } else {
            $product_status->status = 0;
        }
        $product_status->save();
        Toastr::success('Status Change Successfully', 'Success');
        return redirect()->back();
    }

    public function approval($id)
    {
        $product_approval = Product::findOrFail($id);
        $product_approval->approval = 1;
        $product_approval->save();
        Toastr::success('Product Approved', 'Success');
        return redirect()->back();
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
        $shop = Shop::where('status',1)->get();
        return view('backend.product.edit', compact('product','category','shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation=Validator::make($request->all(),[
            'product_name'  => 'required|unique:products,product_name,'.$id,
            'product_slug'  => 'required',
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
        ]);
        if ($validation->fails()) {
            return back()->withInput()->withErrors($validation);
        }

        $update = Product::findOrFail($id);
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
        $update->fill($formData)->save();
        Toastr::success('Update Successfully');
        return redirect()->route('seller.product.list');
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
