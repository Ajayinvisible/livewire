<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.counter', [
            'users' => $users
        ]);
    }

    // validation rule
    #[Rule('required|string|min:3|max:100')]
    public $name;

    #[Rule('required|min:5|email|max:255|unique:users')]
    public $email;

    #[Rule('required|min:5')]
    public $password;

    public function createNewUser()
    {
        $validated = $this->validate();
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        // rest input fields
        $this->reset(['name', 'email', 'password']);
        // flash message
        request()->session()->flash('success', 'user created successfully!');
    }
}
