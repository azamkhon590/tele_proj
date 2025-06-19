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
    public $level = 1;
    public $xp = 0;
    public $coins = 0;
    public $clickPower = 1;
    public $xpToNextLevel = 10;

    public function mount()
    {
        $user = auth()->user();
        if (!$user){
            $user = User::query()->first();
            Auth::login($user);
        }
        $counter = Counter::firstOrCreate(
            ['user_id' => Auth::id()],
            ['count' => 0],
            ['updated' => 1],
            ['level' => 1],
            ['xp' => 0],
            ['clickPower' => 1],
            ['coins' => 0],
        );
        $this->counterId = $counter->id;
        $this->count = $counter->count;
        $this->updated = $counter->updated;
        $this->level = $counter->level;
        $this->xp = $counter->xp;
        $this->coins = $counter->coins;
        $this->clickPower = $counter->clickPower;
    }

    public function checkLevelUp(){
        if($this->xp >= $this->xpToNextLevel){
            $this->level++;
            $this->updated++;
            $this->xp -= $this->xpToNextLevel;
            $this->clickPower += 1;
            $this->coins += $this->level * 5;
            $this->saveToDatabase();
        }
    }

    public function increment()
    {
        $this->count += $this->updated;
        $this->coins += $this->clickPower;
        $this->xp += 1;

        $this->checkLevelUp();
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
            ['updated' => $this->updated],
            ['level' => $this->level],
            ['xp' => $this->xp],
            ['coins' => $this->coins],
            ['clickPower' => $this->clickPower],
            ['user_id' => Auth::id()]
        );
    }

    public function render()
    {
        return view('livewire.counter-component');
    }
}
