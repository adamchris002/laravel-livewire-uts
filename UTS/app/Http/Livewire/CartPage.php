<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CartPage extends Component
{
    public function render()
    {
        $order = Order::all();
        return view('livewire.cart-page', [
            'order' => $order
        ]);
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        
    }
}
