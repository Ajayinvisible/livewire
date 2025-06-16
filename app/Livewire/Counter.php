<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        $users = User::all();
        return view('livewire.counter',[
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }
}
