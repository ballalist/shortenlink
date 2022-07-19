@extends('layout.app')
@section('content')
    <div class="relative flex h-full w-full">
        <div class="h-screen w-full">
            <div class="mx-auto flex h-full w-1/3 flex-col justify-center text-white xl:w-1/3">
                @livewire('admin-login')
            </div>
        </div>
    </div>
@endsection
