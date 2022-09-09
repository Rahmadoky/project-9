<?php

namespace App\Http\Controllers;

class ClientProdukController extends Controller{


    function showHome(){
        return view('layout.home');
    }

    function showShop(){
        return view('layout.shop');
    }

    function showCart(){
        return view('layout.shop-cart');
    }
    function showProduct(){
        return view('layout.product-details');
    }
    function showContact(){
        return view('layout.contact');
    }
    function showBlog(){
        return view('layout.blog');
    }
    function showBlogDetails(){
        return view('layout.blog-details');
    }
    function showCheckout(){
        return view('layout.checkout');
    }
       
}