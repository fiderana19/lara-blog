<div {{ $attributes->merge(['class' => 'font-bold']) }}>
    <h1>Coucou {{ $name }} ! , vous etes sur le post de : {{ $title }}</h1>

    {{ $subtitle }}

    @foreach($tags as $tag)
        {{ $tag }}
    @endforeach
</div>