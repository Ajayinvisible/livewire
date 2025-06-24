<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    #[On('user-created')]
    public function updateList($user = null)
    {
        
    }


    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.user-list', [
            'users' => $users
        ]);
    }
}
