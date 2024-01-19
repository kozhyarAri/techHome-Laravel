@extends('layouts.public')

@section('content')
    <section class="bg-white flex flex-col items-center md:flex-row justify-between shadow-lg rounded-xl p-4">
        <div class="flex flex-col justify-center md:w-1/2 gap-3 px-3">
            <div class="text-xl md:text-3xl font-semibold hover:scale-105 cursor-pointer transition-all">
                {{ $info->homeTitle }}
            </div>
            <div class="text-lg md:text-2xl cursor-pointer transition-all hover:scale-105">
                {{ $info->homeSubTitle }}
            </div>
            <div
                class="text-gray-900 transition-all w-1/3 cursor-pointer hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                About Us</div>
        </div>
        <div class="md:w-1/2 justify-end flex">
            <img src="{{ asset('assets/img/WebDevices.svg') }}" alt="" class="h-96">
        </div>
    </section>
    <div class="text-lg md:text-2xl my-5 border-b-2 w-1/2 mx-4 md:mx-0">Category</div>
    <section class="mt-5 mx-4 md:mx-0">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-10 ">
            @foreach ($categorys as $category)
                <x-category-component :categorys="$category" />
            @endforeach
        </div>
    </section>

    <div class="text-lg md:text-2xl my-5 border-b-2 w-1/2 mx-4 md:mx-0">latest Devices</div>
    <section class="mt-5 mx-4 md:mx-0">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 ">
            @foreach ($devices as $device)
                <x-device :devices="$device" />
            @endforeach
        </div>
        <div class="w-full mt-5 flex justify-center">
            <a
                class="text-gray-900 w-1/2 cursor-pointer hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">See
                More</a>
        </div>
    </section>
@endsection
