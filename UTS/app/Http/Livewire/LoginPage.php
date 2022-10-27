<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginPage extends Component
{
    public $username,$password;

    public function render()
    {
        return view('livewire.login-page');
    }

    public function rules()
    {
        return[

            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    public function loginUser()
    {
        $this->validate();
        if(!Auth::attempt($this->only(['username','password']))){
            $this->addError('username',_('auth.failed'));
            return null;
        }

        return  $this->redirect('home');
    }
}
