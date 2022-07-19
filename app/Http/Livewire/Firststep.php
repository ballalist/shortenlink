<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Firststep extends Component
{
    public function render()
    {
        return view('livewire.firststep');
    }

    public function goToSecondStep()
    {
        $this->emit('steps', 2);
    }
}
