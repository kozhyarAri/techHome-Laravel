@extends('layouts.admin')
@section('content')
    @if (session()->has('msg'))
        <div class="flex w-1/2 my-3 mx-auto items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50"
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
        
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $info->phoneNumber }}
                    </th>
                    
                    <td class="px-6 py-4 flex gap-1">
                        <a class="bg-green-400 px-2 py-1 rounded-md text-white"
                            href="{{ route('info.edit', ['info' => $info->id]) }}">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
