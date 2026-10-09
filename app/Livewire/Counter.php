<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $firstCount = 1;
    public $secondCount = 1;

    public $myNum = 4;

    public function increment() {

        $this->firstCount++;

    }

    public function decrement() {

        $this->firstCount--;

    }

    public function incrementMyNumber($num) {

        $this->secondCount = $this->secondCount + $num;

    }

    public function decrementMyNumber($num) {

        $this->secondCount = $this->secondCount - $num;

    }

    public function render()
    {

        return view('livewire.counter');

    }
}
