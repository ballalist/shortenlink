<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Steps extends Component
{
    protected $listeners = ['steps'];

    public $step = 1;

    public function render()
    {
        if (Auth::check()) {
            $this->step = 3;
        }
        return view('livewire.steps');
    }

    public function steps($step)
    {
        $this->step = $step;
    }
}
