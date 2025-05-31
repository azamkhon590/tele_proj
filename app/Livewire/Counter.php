<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CountCoin;

class Counter extends Component
{
    public $count;
    
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        
        return view('livewire.counter');
    }
}
