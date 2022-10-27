<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller {
    //
    public function list(Request $request) {
        $smartphones = Http::get('https://dummyjson.com/products/category/smartphones');
        $laptops = Http::get('https://dummyjson.com/products/category/laptops');

        $smartphones = json_decode($smartphones);
        $laptops = json_decode($laptops);
        // dd($laptops);

        // $search = array();
        if (isset($request->search)) {
            $search = array();
            foreach ($smartphones->products as $hp) {
                if ($hp->title == $request->search) {
                    $search = ['id' => $hp->id, 'title'=> $hp->title, 'thumbnail' => $hp->thumbnail, 'description' => $hp->description];
                }
            }
            foreach ($laptops->products as $lp) {
                if ($lp->title == $request->search) {
                    $search = ['id' => $lp->id, 'title'=> $lp->title, 'thumbnail' => $lp->thumbnail, 'description' => $lp->description];
                }
            }
            return view('search',compact('search'));
        }

        return view('home',compact('laptops','smartphones'));
    }

    public function detail($id) {
        $smartphones = Http::get('https://dummyjson.com/products/category/smartphones');

        $smartphones = json_decode($smartphones);
        $detailSmartphone = array();
        foreach ($smartphones->products as $hp) {
            if ($hp->id == $id) {
                $detailSmartphone = ['id' => $hp->id, 'title'=> $hp->title, 'thumbnail' => $hp->thumbnail, 'description' => $hp->description];
            }
        }
        // dd($detailSmartphone);
        return view('detail',compact('detailSmartphone'));
    }
    public function detailLaptop($id) {
        $laptops = Http::get('https://dummyjson.com/products/category/laptops');

        $laptops = json_decode($laptops);
        $detailLaptops = array();
        foreach ($laptops->products as $lt) {
            if ($lt->id == $id) {
                $detailLaptops = ['id' => $lt->id, 'title'=> $lt->title, 'thumbnail' => $lt->thumbnail, 'description' => $lt->description];
            }
        }
        // dd($detailSmartphone);
        return view('detailLaptops',compact('detailLaptops'));
    }
}
