<?php

namespace App\Http\Livewire;


use App\Models\Order;
use App\Models\history;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class DetailPage extends Component
{
    public $title, $price, $thumbnail, $description, $stock, $rating, $quantity;

    public function mount($product)
    {
        $this->title = $product->title;
        $this->price = $product->price;
        $this->thumbnail = $product->thumbnail;
        $this->description = $product->description;
        $this->stock = $product->stock;
        $this->rating = $product->rating;
    }

    public function render()
    {

        return view('livewire.detail-page');
    }

    public function addToCart()
    {

        Order::create([

            'price' => $this->price,
            'title' => $this->title,
            'thumbnail' => $this->thumbnail,
            'quantity' => $this->quantity,

        ]);



        session()->flash('message','success added to cart');

    }



}
