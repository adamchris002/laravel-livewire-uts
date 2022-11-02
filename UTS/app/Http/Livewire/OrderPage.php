<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\history;
use Livewire\Component;

class OrderPage extends Component
{

    public $price, $title,$thumbnail,$quantity, $subtotal;


    public function checkOut($id)
    {
        $order = Order::find($id);
        $this->price = $order->price;
        $this->title = $order->title;
        $this->thumbnail = $order->thumbnail;
        $this->quantity = $order->quantity;


        history::create([

            'price' => $this->price,
            'title' => $this->title,
            'thumbnail' => $this->thumbnail,
            'quantity' => $this->quantity,
            'subtotal' => $this->quantity * $this->price,

        ]);
        $order = Order::find($id);
        $order->delete();
        session()->flash('message','success checked out');
   
    }


    public function render()
    {
        $order = Order::all();
        return view('livewire.order-page',[
            'order' => $order
        ]);
    }

    


    
    

   

    public function delete($id){
        $order = Order::find($id);
        $order->delete();

        
    }
}
