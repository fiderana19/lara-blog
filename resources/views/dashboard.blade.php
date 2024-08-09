<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                {{ session('success') }}
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($posts as $post)
                <div class="p-6 text-gray-900">
                    <a style="background-color: yellow;" href="{{ route('posts.edit' , $post ) }}">Editer {{ $post->title }}</a>
                    <a style="background-color: red;" href="">Supprimer {{ $post->title }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
