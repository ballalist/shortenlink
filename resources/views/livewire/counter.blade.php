<div class="space-x-4">
    <button class="bg-gray-300 px-4 py-2 rounded text-gray-700" wire:click="increment">Increment</button>
    <button class="bg-gray-300 px-4 py-2 rounded text-gray-700" wire:click="decrement">Decrement</button>

    <div class="block py-4 text-gray-300 text-center">{{$count}}</div>
</div>