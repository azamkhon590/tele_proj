<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Counter; // Импортируем модель
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CounterComponent extends Component
{
    public $count = 0;
    public $updated = 1;
    public $counterId; // ID записи в БД

    public function mount()
    {
        $user = auth()->user();
        if (!$user){
            $user = User::query()->first();
            Auth::login($user);
        }
        $counter = Counter::firstOrCreate(
            ['user_id' => Auth::id()],
            ['count' => 0]
        );
        $this->counterId = $counter->id;
        $this->count = $counter->count;
    }


    public function updateCounter()
    {
        $this->count - 100;
        $this->updated++;
        $this->saveToDatabase();
    }
    public function increment()
    {
        $this->count + $this->updated;
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
            ['count' => $this->count],
            ['user_id' => Auth::id()]
        );
    }

    public function render()
    {
        return view('livewire.counter-component');
    }
}
