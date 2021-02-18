<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;

class ClientController extends Controller
{
    public function index(){
        $larges = Product::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.index',[
            'larges'=>$larges,
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function getProductDetail(Request $request){
        if ($request->ajax()){
            $output = "";
            $product = Product::find($request->product_id);
            $output = '
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tab-content">
                            <div id="product-1" class="tab-pane fade in show active">
                                <div class="product-details-thumb">
                                    <img src="uploads/product/'.$product->product_image.'" alt="" />
                                </div>
                            </div>
                            <div id="product-2" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/2.jpg" alt="" />
                                </div>
                            </div>
                            <div id="product-3" class="tab-pane fade">
                                <div class="product-details-thumb">
                                    <img src="assets/images/products/product-details/3.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="product-details-desc">
                                    <h2>'.$product->product_name.'</h2>
                                    <ul>
                                        <li>'.$product->product_desc.'</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-action stuck text-left">
                                    <div class="free-delivery">
                                        <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                    </div>
                                    <div class="product-price-rating">
                                        <div>
                                            <del>'.$product->product_cancel_price.'</del>
                                        </div>
                                        <span>Ksh '.$product->product_price.'</span>
                                        <div class="pull-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            ';
        }
        return response($output);
    }
    public function shop(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $shops = Product::all();
        return view('client.shop',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'shops'=>$shops
        ]);
    }
    public function login(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('login',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function register(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('register',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }

    public function checkout(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('client.checkout',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice
        ]);
    }
    public function success(){
        return view('client.success');
    }
    public function productDetail($id){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $detail = Product::find($id);
        return view('client.productDetail',[
            'products'=>$cart->item,
            'totalPrice'=>$cart->totalPrice,
            'detail'=>$detail
        ]);
    }
}