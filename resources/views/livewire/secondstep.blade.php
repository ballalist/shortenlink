
    <div>
        <div class="mt-10">
            <form wire:submit.prevent="login">
                <div>
                    <label class="mb-2.5 block font-extrabold" for="email">Email</label>
                    <input wire:model="email" type="email" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
                    @error('email') <span class="error text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4">
                    <label class="mb-2.5 block font-extrabold" for="password">Password</label>
                    <input wire:model="password" type="password" id="password" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
                    @error('password') <span class="error text-red-400">{{ $message }}</span> @enderror
                </div>
                <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                    <!-- Remember me -->
                    <div><input type="checkbox" wire:model="remember" id="remember" /><label for="remember" class="mx-2 text-sm">Remember me</label></div>
                    <div>
                    <a href="javascript:void(0)" wire:click="goToRegisterStep" class="text-sm hover:text-gray-200">Register</a>
                    </div>
                </div>
                <div class="my-10">
                    <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Login</button>
                </div>
                @if($error) 
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                        <span class="font-medium">Sorry!</span> Your email or password not correct! Please try again.
                    </div>
                @endif
            </form>
        </div>
    </div>