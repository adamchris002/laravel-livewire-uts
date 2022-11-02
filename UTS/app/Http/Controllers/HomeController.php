<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller {



    public function detail($id){
        $product = product::where('id',$id)->first();
        return view('page.detail',[
            'product' => $product
        ]);
    }

    public function cart()
    {
        $keranjang = Order::all();
        return view ('page.cart',['keranjang'=>$keranjang]);
    }





}
