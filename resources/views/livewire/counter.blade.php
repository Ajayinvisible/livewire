<div>
    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <div class="card w-25 p-4 shadow">
        <form wire:submit='createNewUser' action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model='name' type="text" name="name" id="name" class="form-control"
                    placeholder="name">
                @error('name')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model='email' type="email" name="email" id="email" class="form-control"
                    placeholder="email">
                @error('email')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input wire:model='password' type="password" name="password" id="password" class="form-control"
                    placeholder="password">
                @error('password')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input wire:model='image' type="file" name="image" id="image" class="form-control"
                    accept="image/png, image/jpg,image/jpeg">
                @error('image')
                    <small class="text-danger d-block">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <span wire:loading wire:target='image' class="text-success">Uploading...</span>
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="rounded shadow border border-2" width="60px"
                        alt="">
                @endif
            </div>
            <div wire:loading class="spinner-border spinner-border-sm text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <button wire:loading.attr='disable' class="btn btn-success">Create</button>
            {{-- <button wire:loading.remove class="btn btn-success">Create</button> --}}
            {{-- prevent default --}}
            {{-- <button wire:click.prevent='createNewUser' class="btn btn-success">Create</button> --}}
        </form>
    </div>
    <hr>
    <div class="card w-25 p-4 shadow">
        <ul>
            @foreach ($users as $user)
                <li wire:key='{{ $user->id }}'>{{ $user->name }}</li>
            @endforeach
        </ul>
        {{ $users->links() }}
    </div>
</div>
