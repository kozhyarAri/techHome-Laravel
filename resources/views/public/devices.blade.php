@extends('layouts.public')
@section('content')
    <div class="text-lg md:text-2xl my-5 border-b-2 w-1/2 mx-4 md:mx-0">Category</div>
    <section class="mt-5 mx-4 md:mx-0">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 ">
            <a href="{{ route('devices',['id'=>0]) }}">
                <div
                    class="h-20 md:h-28 w-full bg-white flex items-center justify-around shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
                    <img src="{{ asset('assets/img/device.png') }}" alt="" class="h-10 md:h-20">
                    <div class="text-lg md:text-2xl font-semibold">All</div>
                </div>
            </a>
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
        <div class="my-10 max-w-lg mx-auto">
            {{ $devices->links() }}
        </div>
    </section>
@endsection
