@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
        <a href="{{ route('user.index') }}">
            <div class="bg-slate-700 text-white flex flex-col justify-center items-center py-5 space-y-2 shadow-xl rounded-xl">
                <img class="h-28 w-28" src="{{ asset('assets/images/users.png') }}" alt="">
                <div class="text-2xl">Users</div>
                <div class="text-3xl font-semibold">{{ $userCount }}</div>
            </div>
        </a>
        <a href="{{ route('category.index') }}">
            <div class="bg-slate-700 text-white flex flex-col justify-center items-center py-5 space-y-2 shadow-xl rounded-xl">
                <img class="h-28 w-28" src="{{ asset('assets/images/category.png') }}" alt="">
                <div class="text-2xl">Category</div>
                <div class="text-3xl font-semibold">{{ $categoryCount }}</div>
            </div>
        </a>
        <a href="{{ route('device.index') }}">
            <div class="bg-slate-700 text-white flex flex-col justify-center items-center py-5 space-y-2 shadow-xl rounded-xl">
                <img class="h-28 w-28" src="{{ asset('assets/images/devices.png') }}" alt="">
                <div class="text-2xl">Devices</div>
                <div class="text-3xl font-semibold">{{ $deviceCount }}</div>
            </div>
        </a>

    </div>
@endsection