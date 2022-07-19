@extends('layout.app')
@section('content')
    @if(!$notFound)
        @livewire('steps')
    @else
        @livewire('nolink')
    @endif
@endsection
