@extends('layouts.public')

@section('content')
    <section class="bg-white flex flex-col md:flex-row justify-between shadow-lg rounded-xl p-4">
        <div class="md:w-1/3 justify-end flex">
            <img src="{{ asset('assets/images/device_image/' . $device->image) }}" alt="" class="h-96">
        </div>
        <div class="flex flex-col justify-start  md:w-2/3 gap-3 px-1 md:px-5">
            <div class="flex items-center space-x-1">
                <img class="h-5" class="object-cover" src="https://www.svgrepo.com/show/526542/eye.svg" alt="">
                <div>
                    {{ $device->view_counts }}
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-2 shadow-lg rounded-lg p-5">
                <div><b>Ram: </b>{{ $device->ram }}GB</div>
                <div><b>Cpu: </b>{{ $device->cpu }}</div>
                <div><b>storage: </b>{{ $device->storage }}</div>
                <div><b>Back Camera: </b> {{ $device->main_camera }} </div>
                <div><b>Front Camera: </b>{{ $device->selfie_camera }}</div>
            </div>
            <div class="border border-dotted p-5 shadow-lg rounded-lg">
                <b>Review: </b>
                {{ $device->review }}
            </div>
        </div>

    </section>
@endsection
