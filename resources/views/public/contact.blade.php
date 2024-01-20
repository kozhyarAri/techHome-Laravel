@extends('layouts.public')
@section('content')
    <section class="bg-white flex flex-col items-center md:flex-row justify-between shadow-lg rounded-xl p-4">
        <div class="md:w-1/3 justify-end flex">
            <img src="{{ asset('assets/img/email.svg') }}" alt="" class="h-96">
        </div>
        <div class="flex flex-col justify-center w-full md:w-2/3 gap-3 px-3">
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
            <form action="{{ route('sendEmail') }}" method="POST" class="w-full mx-auto space-y-2">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                        email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="name@gmail.com" required>
                    @error('email')
                        <div class="text-sm text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your
                        Name</label>
                    <input type="text" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required>
                    @error('name')
                        <div class="text-sm text-red-700">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                    message</label>
                <textarea id="message" rows="4" name="message"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Write your thoughts here..."></textarea>
                @error('message')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Send
                    Email</button>
            </form>

        </div>
    </section>
@endsection
