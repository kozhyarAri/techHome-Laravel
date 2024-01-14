@extends('layouts.admin')
@section('content')
    @if (session()->has('msg'))
        <div class="flex w-1/2 my-3 mx-auto items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session()->get('msg') }}</span>
            </div>
        </div>
    @endif

    <div class="relative overflow-x-auto space-y-2">
        <br>
        <a class="bg-green-600 px-2 py-1 rounded-md text-white" href="{{ route('device.create') }}">Add Device</a>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Admin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($devices as $device)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="h-10 w-10 object-cover" src="{{ $device->getImage() }}" alt="">
                        </th>
                        <td class="px-6 py-4">
                            {{ $device->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $device->price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $device->user->name }}
                        </td>
                        <td class="px-6 py-4 flex gap-1">
                            <a class="bg-green-400 px-2 py-1 rounded-md text-white"
                                href="{{ route('device.edit', ['device' => $device->id]) }}">Edit</a>
                            <form method="POST" action="{{ route('device.destroy', ['device' => $device->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 px-2 py-1 rounded-md text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
