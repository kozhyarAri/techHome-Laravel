@extends('layouts.public')
@section('content')
    <section class="bg-white flex flex-col items-center md:flex-row justify-between shadow-lg rounded-xl p-4">
        <div class="flex flex-col justify-center  md:w-2/3 gap-3 px-3">

            <div class="text-lg md:text-lg cursor-pointer transition-all hover:scale-105">
                Confused by gadgets? We get it. At <b>TechHome</b> , we cut through the tech jargon and deliver honest
                reviews of phones, laptops, tablets, and iPads. We test, compare, and guide, so you can choose the perfect
                device for your needs and budget. Welcome to your tech sherpa!

                This shorter version condenses the key points while maintaining a friendly and informative tone. Feel free
                to further tailor it to your specific website and target audience.
            </div>

        </div>
        <div class="md:w-1/3 justify-end flex">
            <img src="{{ asset('assets/img/about.svg') }}" alt="" class="h-96">
        </div>
    </section>
@endsection
