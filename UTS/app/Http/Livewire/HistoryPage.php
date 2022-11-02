<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryPage extends Component
{

    public $title, $price, $thumbnail, $subtotal, $quantity;

    public function mount($order)
    {
        $this->title = $order->title;
        $this->price = $order->price;
        $this->thumbnail = $order->thumbnail;
        $this->quantity = $order->quantity;
    }
    
    public function render()
    {
        $history = History::all();
        return view('livewire.history-page', [
            'history' => $history
        ]);
    }
}
