<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;

class AdminLogin extends Component
{
    public  $logedIn = false,
            $email = 'test@shorturl.me',
            $password = '1234',
            $admin;
    public function render()
    {
        Session::put('admin',false);
        return view('livewire.admin-login');
    }

    public function login()
    {
        if($this->email == 'test@shorturl.me' && $this->password == '1234') {
            Session::put('admin',true);
            return redirect()->route('admin.management');
        }
    }
}
