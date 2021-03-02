<?php

namespace App\Http\Controllers;

use App\category;
use App\Contact;
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
    public function contact(){
        $contacts = Contact::all();
        return view('admin.contact',[
            'contacts'=>$contacts
        ]);
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.edit',[
            'product'=>$product
        ]);
    }
    public function editProd(Request $request){
        $edit = Product::find($request->product_id);
        $edit->product_name = $request->input('product_name');
        $edit->product_desc = $request->input('product_desc');
        $edit->product_price = $request->input('product_price');
        $edit->product_cancel_price = $request->input('product_cancel_price');
        $edit->product_category = $request->input('category');
        $edit->product_brand = $request->input('brand');
        $edit->save();
        return redirect(url('products'))->with('success','Product Edited Success');
    }
    public function delete(Request $request){
        $delete = Product::find($request->product_id);
        $delete->delete();
        return back()->with('success','Product deleted success');
    }
    public function storeCategory(Request $request){
        $category = category::create([
            'category'=>$request->input('category'),
            'brand'=>$request->input('brand'),
        ]);
        return back()->with('success','Category saved');
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
        $products->product_category = $request->input('category');
        $products->product_brand = $request->input('brand');
        $products->save();

        return back()->with('success','Product Stored Success');

    }
    public function deleteContact(Request $request){
        $delete = Contact::find($request->deleteContact);
        $delete->delete();
        return back()->with('success','Info Deleted');
    }
    public function orders(){
        return view('admin.orders');
    }
    public function reviews(){
        return view('admin.reviews');
    }
}
