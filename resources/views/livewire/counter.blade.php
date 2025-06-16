<div>
    <form wire:submit='createNewUser' action="">
        <div class="mb-3">
            <input wire:model='name' type="text" name="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input wire:model='email' type="email" name="email" id="email" placeholder="email">
        </div>
        <div class="mb-3">
            <input wire:model='password' type="password" name="password" id="password" placeholder="password">
        </div>
        <button class="btn btn-success">Create</button>
        {{-- prevent default --}}
        {{-- <button wire:click.prevent='createNewUser' class="btn btn-success">Create</button> --}}
    </form>
    <hr>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
