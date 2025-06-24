<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    // public $search = '';

    #[On('user-created')]
    public function updateList($user = null)
    {
        
    }

    public function placeholder()
    {
        return view('placeholders.userlist-placeholder');
    }

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.user-list', [
            'users' => $users,
            'count' => User::count(),
        ]);
    }
}
