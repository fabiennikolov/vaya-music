<div>
    <div class="mx-auto w-fit">
        <h1>Vaya Music</h1>
        @foreach ($musics as $music)
            {{ $music->title }}
            {{ $music->song }}
        @endforeach
    </div>
</div>
