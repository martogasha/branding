<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        if (Auth::check()) {
            return view('admin.index', [
            ]);
        }
        else{
            return redirect(url('Login'))->with('error','Credentials doesnt match');
        }
    }
    public function products(){
        $products = Product::all();
        return view('admin.product',[
            'products'=>$products
        ]);
    }
    public function storeProduct(Request $request){
        $products = new Product();
        if ($request->product_image) {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $products->product_image = $filename;
        }
        $products->product_name = $request->input('product_name');
        $products->product_desc = $request->input('product_desc');
        $products->product_price = $request->input('product_price');
        $products->product_cancel_price = $request->input('product_cancel_price');
        $products->product_category = $request->input('product_category');
        $products->product_brand = $request->input('product_brand');
        $products->save();

        return back()->with('success','Product Stored Success');

    }
    public function orders(){
        return view('admin.orders');
    }
    public function reviews(){
        return view('admin.reviews');
    }
}
