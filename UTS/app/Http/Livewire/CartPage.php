<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Models\history;

class userPage extends Component
{
    public $price, $title,$thumbnail,$quantity, $subtotal;


    public function mount($cart)
    {
        $this->title = $cart->title;
        $this->price = $cart->price;
        $this->thumbnail = $cart->thumbnail;
        $this->quantity = $cart->quantity;
        $this->subtotal = $cart->price * $cart->quantity;
    }


    public function CheckOut()
    {

        
        

        history::create([

            'price' => $this->price,
            'title' => $this->title,
            'thumbnail' => $this->thumbnail,
            'quantity' => $this->quantity,
            'subtotal' => $this->subtotal,

        ]);

        session()->flash('message','Checkout Success!');

    }
    

    public function render()
    {
        $order = Order::all();
        return view('livewire.cart-page', [
            'order' => $order
        ]);
    }

    public function delete($id){
        $order = Order::find($id);
        $order->delete();
    }

    
}
