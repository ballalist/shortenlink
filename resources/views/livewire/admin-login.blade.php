{{-- login --}}
<div>
    <div class="mt-10">
        @if(!$logedIn)
        <form wire:submit.prevent="login">
            <div>
                <label class="mb-2.5 block font-extrabold" for="email">Admin Email</label>
                <input wire:model="email" type="email" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
                @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label class="mb-2.5 block font-extrabold" for="password">Admin Password</label>
                <input wire:model="password" type="password" id="password" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                @error('password') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="my-10">
                <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Login</button>
            </div>
        </form>
        @else 
            Admin Management
        @endif
    </div>
</div>
{{-- end login --}}