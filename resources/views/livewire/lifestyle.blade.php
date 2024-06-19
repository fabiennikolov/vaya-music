<div>
    <h2 class="font-bold text-5xl text-center pt-4">Lifestyle</h2>

    <div class="grid grid-cols-3 w-full gap-1 mx-auto container py-8 px-2">
        @foreach ($lifestyles as $lifestyle)
            <div><img class="w-full h-full bg-cover object-cover rounded-lg"
                    src="{{ $lifestyle->getFirstMediaUrl('lifestyle') }}" /></div>
        @endforeach
    </div>
</div>
