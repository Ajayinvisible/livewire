<div>
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <form wire:submit='createNewUser' action="">
        <div class="mb-3">
            <input wire:model='name' type="text" name="name" id="name" placeholder="name">
            @error('name')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <input wire:model='email' type="email" name="email" id="email" placeholder="email">
            @error('email')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <input wire:model='password' type="password" name="password" id="password" placeholder="password">
            @error('password')
                <small class="text-danger d-block">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-success">Create</button>
        {{-- prevent default --}}
        {{-- <button wire:click.prevent='createNewUser' class="btn btn-success">Create</button> --}}
    </form>
    <hr>
    <ul>
        @foreach ($users as $user)
            <li wire:key='{{ $user->id }}'>{{ $user->name }}</li>
        @endforeach
    </ul>
    {{ $users->links() }}
</div>
