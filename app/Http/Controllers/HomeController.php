<?php

namespace App\Http\Controllers;
use App\Models\Produk;
class HomeController extends Controller{



    function showaccount(){
        return view('frontview.account');
    }

    function showcart(){
        return view('frontview.cart');
    }

    function showcheckout(){
        return view('frontview.checkout');
    }

    function showdetail(){
        return view('frontview.detail');
    }

    function showindex(){
        return view('frontview.index');
    }

  
    function showproduk1(){
        return view('frontview.produk1');
    }

    function showshop(){
        $data['list_produk'] = Produk::all();
        return view('frontview.shop', $data);

    }

    function showwhislist(){
        return view('frontview.whislist');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

 
    function showproduk2(){
        return view('backview.produk2');
    }

    function showpromo(){
        return view('backview.promo');
    }

   
    function showsupplier(){
        return view('backview.supplier');
    }

    function showuser(){
        return view('backview.user');
    }

    function showlogin(){
        return view('frontview.login');
    }

    function showlogin2(){
        return view('backview.login2');
    }

    
    function showregister(){
        return view('frontview.register');
    }


    function showregister2(){
        return view('backview.register2');
    }

   

  
}