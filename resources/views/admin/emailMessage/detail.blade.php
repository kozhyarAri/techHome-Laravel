@extends('layouts.admin')

@section('content')

<div class="shadow-xl bg-stone-200 rounded-lg">
    <div class="border-b border-black">
        <div class="font-bold flex mx-5 mb-2">Name: <div class="font-normal">{{ $message->name }}</div></div>
        <div class="font-bold flex mx-5 mb-2">Email: <div class="font-normal">{{ $message->email }}</div></div>
    </div>
    <div class="py-5">
        <div class="font-bold flex mx-5 mb-5">Message: <div class="font-normal">{!! nl2br(e($message->message)) !!}</div></div>
    </div>
</div>

    
    

@endsection