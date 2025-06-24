<div wire:poll.keep-alive class="card p-4 shadow">
    <ul>
        @foreach ($users as $user)
            <li wire:key='{{ $user->id }}'>{{ $user->name }}</li>
        @endforeach
    </ul>
    {{ $users->links() }}
</div>
