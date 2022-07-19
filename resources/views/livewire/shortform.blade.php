<div class="relative flex h-full w-full">
  <div class="h-screen w-full">
    <div class="mx-auto flex h-full flex-col justify-center text-white">
        <p class="text-right mb-10">
            <a href="{{URL::to('/logout')}}"><u>Logout</u></a>
        </p>
      <div>
        <fieldset class="border-t border-solid border-gray-600">
          <legend class="mx-auto px-2 text-center text-sm">Just paste the URL!!</legend>
        </fieldset>
      </div>
      <div class="mt-10">
        @if(!$success) 
        <form wire:submit.prevent="shortUrl">
          <div>
            <label class="mb-2.5 block font-extrabold" for="url">URL</label>
            <input type="text" wire:model="url" id="url" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="" />
            @error('url') <span class="error text-red-400">{{ $message }}</span> @enderror
          </div>
          <div class="my-10">
            <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Short It!</button>
          </div>
        </form>
        @endif
        @if($success) 
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                <span class="font-medium">Success!!</span>
            </div>
            <div class="mt-10">
                <input type="text" wire:model="shortUrl" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" id="shortUrl" placeholder="" />
            </div>
            <div class="my-10">
                <button onclick="copyText()" class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Copy Your URL</button>
            </div>
            <div class="my-10 text-center">
                <a href="javascript:void(0)" wire:click="goToThirdStep">Create another shorten URL.</a>
            </div>
        @endif
        @if($error) 
            <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">Error!</span> Please try again! or contact administrator
            </div>
        @endif
      </div>
    </div>
  </div>
</div>