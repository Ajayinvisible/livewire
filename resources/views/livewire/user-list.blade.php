<div wire:poll.keep-alive class="card p-4 shadow">
    <h4 class="text-center mb-4">Total Users : {{ $count }}</h4>
    <ul>
        @foreach ($users as $user)
            <li wire:key='{{ $user->id }}' class="d-flex justify-content-between align-items-center border-bottom mb-2 pb-2">
                {{ Str::ucFirst($user->name) }} 
                <button class="btn btn-sm btn-info">View</button>
            </li>
        @endforeach
    </ul>
    {{ $users->links() }}
</div>
