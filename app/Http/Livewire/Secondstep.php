<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Secondstep extends Component
{
    public  $email,
            $remember = false,
            $error,
            $password;
    public function render()
    {
        return view('livewire.secondstep');
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password), $this->remember)){
            $this->emit('steps', 3);
        }else{
            $this->error = true;
        }
    }

    public function goToThirdStep()
    {
        $this->emit('steps', 3);
    }

    public function goToRegisterStep()
    {
        $this->emit('steps', 11);
    }
}
