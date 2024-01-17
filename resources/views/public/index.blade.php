@extends('layouts.public')

@section('content')
<section class="bg-white flex flex-col items-center md:flex-row justify-between shadow-lg rounded-xl p-4">
    <div class="flex flex-col justify-center  md:w-1/2 gap-3 px-3">
        <div class="text-xl md:text-3xl font-semibold hover:scale-105 cursor-pointer transition-all">Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Ducimus numquam nostrum fugit aspernatur vitae nobis eveniet
        </div>
        <div class="text-lg md:text-2xl cursor-pointer transition-all hover:scale-105">Lorem, ipsum dolor sit amet
            consectetur adipisicing elit. Ea, culpa.</div>
        <div
            class="text-gray-900 transition-all w-1/3 cursor-pointer hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            About Us</div>
    </div>
    <div class="md:w-1/2 justify-end flex">
        <img src="../img/WebDevices.svg" alt="" class="h-96">
    </div>
</section>
<div class="text-lg md:text-2xl my-5 border-b-2 w-1/2 mx-4 md:mx-0">Category</div>
<section class="mt-5 mx-4 md:mx-0">
    <div class="grid grid-cols-2 md:grid-cols-3 gap-10 ">
        <div
            class="h-20 md:h-28 w-full bg-white flex items-center justify-around shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/laptop.png" alt="" class="h-10 md:h-20">
            <div class="text-lg md:text-2xl font-semibold">Laptop</div>
        </div>
        <div
            class="h-20 md:h-28 w-full bg-white flex items-center justify-around shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/ipad.png" alt="" class="h-10 md:h-20">
            <div class="text-lg md:text-2xl font-semibold">Tablet</div>
        </div>
        <div
            class="h-20 md:h-28 w-full bg-white flex items-center justify-around shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/mobile-app.png" alt="" class="h-10 md:h-20">
            <div class="text-lg md:text-2xl font-semibold">Mobile</div>
        </div>
    </div>
</section>

<div class="text-lg md:text-2xl my-5 border-b-2 w-1/2 mx-4 md:mx-0">latest Devices</div>
<section class="mt-5 mx-4 md:mx-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 ">
        <a href="details.html"
            class="h-72 w-full flex bg-white flex-col items-center justify-center shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/galaxy-a54.jpg" alt="" class="h-24 md:h-32">
            <div class="flex w-full p-2 justify-start">
                <div class="text-xl md:text-2xl border-b-2 border-dotted font-semibold">Galaxy A54</div>
            </div>
            <div class="flex w-full p-2 justify-between">
                <div class="text-xl flex items-center"><img src="../img/ram.png" class="h-8 mr-1">8GB</div>
                <div class="text-xl flex items-center"><img src="../img/harddisk.png" class="h-8 mr-1">256GB</div>
            </div>
            <div class="text-xl md:text-3xl border-2 border-black w-1/2 border-dashed justify-center flex">300$</div>
        </a>
        <div
            class="h-72 w-full flex bg-white flex-col items-center justify-center shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/galaxy-s23.jpg" alt="" class="h-24 md:h-32">
            <div class="flex w-full p-2 justify-start">
                <div class="text-xl md:text-2xl border-b-2 border-dotted font-semibold">Galaxy S23</div>
            </div>
            <div class="flex w-full p-2 justify-between">
                <div class="text-xl flex items-center"><img src="../img/ram.png" class="h-8 mr-1">12GB</div>
                <div class="text-xl flex items-center"><img src="../img/harddisk.png" class="h-8 mr-1">256GB</div>
            </div>
            <div class="text-xl md:text-3xl border-2 border-black w-1/2 border-dashed justify-center flex">500$</div>
        </div>
        <div
            class="h-72 w-full flex bg-white flex-col items-center justify-center shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/galaxy-a54.jpg" alt="" class="h-24 md:h-32">
            <div class="flex w-full p-2 justify-start">
                <div class="text-xl md:text-2xl border-b-2 border-dotted font-semibold">Galaxy A54</div>
            </div>
            <div class="flex w-full p-2 justify-between">
                <div class="text-xl flex items-center"><img src="../img/ram.png" class="h-8 mr-1">8GB</div>
                <div class="text-xl flex items-center"><img src="../img/harddisk.png" class="h-8 mr-1">256GB</div>
            </div>
            <div class="text-xl md:text-3xl border-2 border-black w-1/2 border-dashed justify-center flex">300$</div>
        </div>
        <div
            class="h-72 w-full flex bg-white flex-col items-center justify-center shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
            <img src="../img/galaxy-a54.jpg" alt="" class="h-24 md:h-32">
            <div class="flex w-full p-2 justify-start">
                <div class="text-xl md:text-2xl border-b-2 border-dotted font-semibold">Galaxy A54</div>
            </div>
            <div class="flex w-full p-2 justify-between">
                <div class="text-xl flex items-center"><img src="../img/ram.png" class="h-8 mr-1">8GB</div>
                <div class="text-xl flex items-center"><img src="../img/harddisk.png" class="h-8 mr-1">256GB</div>
            </div>
            <div class="text-xl md:text-3xl border-2 border-black w-1/2 border-dashed justify-center flex">300$</div>
        </div>
    </div>
    <div class="w-full mt-5 flex justify-center">
        <a class="text-gray-900 w-1/2 cursor-pointer hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">See More</a>
    </div>
</section>
@endsection