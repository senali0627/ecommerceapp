<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


#[Title("Register - Click Gift Shop")]

class RegisterPage extends Component
{
    
        public $name;
        public $email;
        public $password;

    // register user
    public function save() {

        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|max:255',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);

        Auth::login($user);

        return redirect()->intended(); 
    }
    
    public function render()
    {
        return view('livewire.auth.register-page');
    }

    
}
