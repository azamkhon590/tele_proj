<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CountCoin;

class Counter extends Component
{
    public $count = 0;
    public $counterId; // ID записи в БД

    public function mount()
    {
        $record = CountCoin::find(1);
        if ($record) {
            $this->count = $record->value;
        }
    }

    public function increment()
    {
        $this->count++;
        $this->saveToDatabase();
    }

    // Автоматическое сохранение при изменении значения
    public function updatedCount($value)
    {
        $this->saveToDatabase();
    }

    private function saveToDatabase()
    {
        $record = CountCoin::firstOrCreate(['id' => 1], ['value' => 0]);
        $record->update(['value' => $this->count]);
    }

    public function render()
    {
        return view('livewire.counter');
    }
}