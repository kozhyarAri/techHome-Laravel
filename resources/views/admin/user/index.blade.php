@extends('layouts.admin')
@section('content')
    
<div class="relative overflow-x-auto space-y-2">
    <br>
    <a class="bg-green-400 px-2 py-1 rounded-md text-white" href="">Add User Admin</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b">
                @foreach ($users as $user)
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <img class="h-10 w-10" src="{{ $user->getImage() }}" alt="">
                </th>
                <td class="px-6 py-4">
                    {{ $user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->email }}
                </td>
                <td class="px-6 py-4">
                    <a class="bg-green-400 px-2 py-1 rounded-md text-white" href="">Edit</a>
                    <a class="bg-red-600 px-2 py-1 rounded-md text-white" href="">Delete</a>

                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection