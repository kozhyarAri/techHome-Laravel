<a href="{{ route('devices',['id'=>$category->id]) }}">
    <div
        class="h-20 md:h-28 w-full bg-white flex items-center justify-around shadow-xl rounded-xl cursor-pointer hover:scale-95 transition-all">
        <img src="{{ asset('assets/images/category_image/' . $category->image) }}" alt=""
            class="h-10 md:h-20">
        <div class="text-lg md:text-2xl font-semibold">{{ $category->name }}</div>
    </div>
</a>