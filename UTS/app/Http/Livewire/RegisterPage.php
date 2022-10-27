<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterPage extends Component
{
    public $name, $email, $username, $password;

    public function render()
    {
        return view('livewire.register-page');
    }

    public function rules()
    {
        return[
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);

        return $this->redirect('/');
    }
}
