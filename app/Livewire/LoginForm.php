<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginForm extends Component
{
    public string $email;
    public string $password;

    public function getRules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.login-form');
    }

    public function login()
    {
        $this->validate();

        $loggedIn = Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ]);

        if (!$loggedIn) {
            $this->addError('email', 'The provided credentials are incorrect.');
            $this->addError('password', 'The provided credentials are incorrect.');
            return;
        }

        return redirect()->route('dashboard');
    }
}
