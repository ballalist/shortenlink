@extends('layout.app')
@section('content')
    <div class="relative flex h-full w-full">
        <div class="h-screen w-full">
            <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-2/3">
                <div class="overflow-x-auto relative">
                    <p class="text-right mb-10">
                        <a href="{{URL::to('/admin')}}"><u>Logout</u></a>
                    </p>
                    
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    id
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Short URL
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Full URL
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Visited Stats
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Email
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($links as $link)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$link->id}}
                                </td>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{URL::to('/')}}/{{$link->slug}}" target="_blank">{{URL::to('/')}}/{{$link->slug}}</a>
                                </th>
                                <th class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{$link->url}}" target="_blank">{{$link->url}}</a>
                                </th>
                                <td class="py-4 px-6 text-center">
                                    {{$link->stats}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$link->user->email}}
                                </td>
                                <td class="py-4 px-6">
                                    <form action="{{ url('/admin-management/link/delete', ['id' => $link->id]) }}" method="post">
                                        <button onclick="return confirm('Are you sure to archive this link?')" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Archive</button>
                                        @method('delete')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-10">
                    {{ $links->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
@endsection
