@extends('layouts.admin')
@section('content')
    @if (session()->has('msg'))
        <div class="flex w-1/2 my-3 mx-auto items-center p-4 text-sm text-gray-800 border border-gray-300 rounded-lg bg-gray-50 "
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
    <form class="max-w-xl mx-auto" method="POST"
        action="{{ route('info.update', ['info' => $info->id]) }}">
        @csrf
        @method('PUT')
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Home Title</label>
        <textarea id="message" rows="4" name="homeTitle" 
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Write your review here...">{{ $info->homeTitle }}</textarea>
            @error('homeTitle')
            <div class="text-sm text-red-700">
                {{ $message }}
            </div>
        @enderror
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Home SubTitle</label>
        <textarea id="message" rows="4" name="homeSubTitle" 
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Write your review here...">{{ $info->homeSubTitle }}</textarea>
            @error('homeSubTitle')
            <div class="text-sm text-red-700">
                {{ $message }}
            </div>
        @enderror
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">About</label>
        <textarea id="message" rows="4" name="about" 
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Write your review here...">{{ $info->about }}</textarea>
            @error('about')
            <div class="text-sm text-red-700">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
            <input type="text" id="name" name="phoneNumber" value="{{ $info->phoneNumber }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="phoneNumber" required>
            @error('phoneNumber')
                <div class="text-sm text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Facebook Link</label>
            <input type="text" id="name" name="facebookLink" value="{{ $info->facebookLink }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="facebookLink" required>
            @error('facebookLink')
                <div class="text-sm text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Instagram Link</label>
            <input type="text" id="name" name="intsaLink" value="{{ $info->intsaLink }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="intsaLink" required>
            @error('intsaLink')
                <div class="text-sm text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">X Link</label>
            <input type="text" id="name" name="xLink" value="{{ $info->xLink }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="xLink" required>
            @error('xLink')
                <div class="text-sm text-red-700">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
    </form>
@endsection
