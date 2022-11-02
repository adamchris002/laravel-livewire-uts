<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller {



    public function detail($id){
        $user = product::where('id',$id)->first();
        return view('page.detail',[
            'user' => $user
        ]);
    }
    
    public function cart()
    {
        $cart = Order::all();
        return view ('page.cart',['cart'=>$cart]);
    }





}
