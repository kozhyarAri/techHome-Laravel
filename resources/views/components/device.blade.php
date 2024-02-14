<a href="{{ route('deviceDetail', ['id' => $device->id]) }}"
    class="h-80 w-full flex bg-white flex-col items-center justify-center shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
    <img src="{{ asset('assets/images/device_image/' . $device->image) }}" alt="" class="h-24 md:h-32">
    <div class="flex w-full p-2 justify-start">
        <div class="text-xl md:text-2xl border-b-2 border-dotted font-semibold">{{ $device->name }}</div>
    </div>
    <div class="flex w-full p-2 justify-between">
        <div class="text-xl flex items-center"><img src="{{ asset('assets/img/ram.png') }}"
                class="h-8 mr-1">{{ $device->ram }}GB</div>
        <div class="text-xl flex items-center"><img src="{{ asset('assets/img/harddisk.png') }}"
                class="h-8 mr-1">{{ $device->storage }}GB</div>
    </div>
    <div class="text-xl md:text-3xl border-2 border-black w-1/2 border-dashed justify-center flex">300$</div>
</a>
