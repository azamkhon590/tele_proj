<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Counter; // Импортируем модель

class CounterComponent extends Component
{
    public $count = 0;
    public $counterId; // ID записи в БД

    public function mount()
    {
        $counter = Counter::firstOrCreate();
        $this->counterId = $counter->id;
        $this->count = $counter->count;
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

    protected function saveToDatabase()
    {
        Counter::updateOrCreate(
            ['id' => $this->counterId],
            ['count' => $this->count]
        );
    }

    public function render()
    {
        return view('livewire.counter-component');
    }
}
