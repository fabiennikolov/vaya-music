<div>
    <h2 class="font-bold text-5xl text-center pt-4">Lifestyle</h2>

    <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 w-full gap-1 mx-auto container py-8 px-2">
        @foreach ($lifestyles as $lifestyle)
            <div>
                {{ $lifestyle->description }}
                <img class="w-full h-full bg-cover object-cover rounded-lg"
                    src="{{ $lifestyle->getFirstMediaUrl('lifestyle') }}" />
            </div>
        @endforeach
    </div>
</div>
