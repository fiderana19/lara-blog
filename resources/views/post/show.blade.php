<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>
    <div class="container px-5 py-5 mx-auto">

    <img src="{{ asset('/storage/' . $post->image) }}" alt="">


    <div>
        {{ $post->content }}
    </div>
         
    </div>
</x-app-layout>