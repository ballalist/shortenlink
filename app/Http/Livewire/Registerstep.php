<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class Registerstep extends Component
{
    public  $email,
            $password,
            $name,
            $success = false,
            $error = false,
            $confirmPassword;
 
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'confirmPassword' => 'required|same:password',
    ];

    public function render()
    {
        return view('livewire.registerstep');
    }

    public function register()
    {
        $validatedData = $this->validate();

        $validateUser = User::where('email', $this->email)->count();
        if($validateUser == false)
        {
            $hashedPassword = Hash::make($this->password); 

            User::create(['name' => $this->name, 'email' => $this->email,'password' => $hashedPassword]);

            $this->email = "";
            $this->password = "";
            $this->confirmPassword = "";
            $this->name = "";
            $this->success = true;
            $this->error = false;
        } else {
            $this->success = false;
            $this->error = true;
        }
    }

    public function gotoLogin()
    {
        $this->emit('steps', 2);
    }
}
