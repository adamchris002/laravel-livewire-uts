<?php

namespace App\Http\Livewire;


use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class DetailPage extends Component
{
    public $title, $price, $thumbnail, $description, $stock, $rating;

    public function mount($user)
    {
        $this->title = $user->title;
        $this->price = $user->price;
        $this->thumbnail = $user->thumbnail;
        $this->description = $user->description;
        $this->stock = $user->stock;
        $this->rating = $user->rating;
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

        ]);

        session()->flash('message','success added to cart');

    }



}
