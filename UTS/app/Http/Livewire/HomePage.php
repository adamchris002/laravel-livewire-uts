<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;

class HomePage extends Component
{

    public $search;

    protected $updateQuerytring = ['search'];


    public function render()
    {
        if ($this->search){
            $products= product::where('title','like','%'.$this->search.'%')->paginate(8);

        }else {

            $products = product::all();
        }
        return view('livewire.home-page', [
            'products' => $products
        ]);
    }
}
