<?php

namespace App\Http\Livewire;

use App\Models\history;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HistoryPage extends Component
{



    
    
    public function render()
    {
        $history = history::all();
        return view('livewire.history-page', [
            'history' => $history
        ]);
    }
}
