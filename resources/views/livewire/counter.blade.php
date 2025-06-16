<div>
    <h1>{{ $title }}</h1>
    <h2>{{ $username }}</h2>
    <p>
        {{ count($users) }}
    </p>
    <button wire:click='createNewUser' class="btn btn-success">Create New User</button>
</div>
