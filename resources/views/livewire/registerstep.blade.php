<div>
    <div class="mt-10">
        <form wire:submit.prevent="register">
            <div>
                <label class="mb-2.5 block font-extrabold" for="name">Name</label>
                <input type="text" wire:model="name" id="name" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="Your Name" />
                @error('name') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                <input type="email" wire:model="email" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
                @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label class="mb-2.5 block font-extrabold" for="password">Password</label>
                <input type="password" wire:model="password" id="password" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                @error('password') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="mt-4">
                <label class="mb-2.5 block font-extrabold" for="confirmpassword">Confirm Password</label>
                <input type="password" wire:model="confirmPassword" id="confirmpassword" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                @error('confirmPassword') <span class="error text-red-400">{{ $message }}</span> @enderror
            </div>
            <div class="my-10">
                <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Register</button>
            </div>
            @if($success) 
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <span class="font-medium">Registering Success!!</span> Click <a href="javascript:void(0)" wire:click="gotoLogin">"<b><u>HERE</u></b>"</a> to login.
                </div>
            @endif
            @if($error) 
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">Sorry!</span> Your user has been registered. Click <a href="javascript:void(0)" wire:click="gotoLogin">"<b><u>HERE</u></b>"</a> to login.
                </div>
            @endif
        </form>
    </div>
</div>