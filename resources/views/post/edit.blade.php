<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{ $post->title }}
        </h2>
    </x-slot>
        @foreach($errors->all() as $error) 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $error }}
        </h2>
        @endforeach
        <div class="container px-5 py-5 mx-auto">
          <form method="post" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">

            @method('put')
            @csrf

            </br >
            <label for="title">Titre du post</label>
            <input id="title" name="title" value="{{ $post->title }}" /></br ></br >

            <label for="content">Contenu du post</label>
            <textarea id="content" name="content">{{ $post->content }}</textarea></br ></br >

            <label for="image">Image du post</label>
            <input type="file" id="image" name="image" /></br ></br >

            <label for="category">Categorie du post</label>
            <select name="category" id="category">
              @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
              @endforeach
            </select> </br ></br >

            <button type="submit"> Modifier mon post</button>

          </form>
        </div>
</x-app-layout>