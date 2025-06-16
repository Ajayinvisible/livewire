<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    // can use directly in blade
    public $username = "harry002";
    public function render()
    {
        $title = 'test';
        $users = User::all();
        return view('livewire.counter',[
            'title' => $title,
            'users' => $users
        ]);
    }

    public function createNewUser()
    {
        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => 'password'
        ]);
    }
}
