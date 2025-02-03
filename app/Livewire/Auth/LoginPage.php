<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;



#[Title("Login - Click Gift Shop")]

class LoginPage extends Component
{

    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|min:6|max:255',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], request()->has('remember'))) {
            return redirect()->intended("/"); 
        } else {
            session()->flash('error', 'Invalid credentials.');
        }
    }  

    public function render()
    {
        return view('livewire.auth.login-page');
    }
}
