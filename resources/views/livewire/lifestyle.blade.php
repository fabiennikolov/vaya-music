<div>
    <h2 class="font-bold text-5xl text-center pt-8">Vaya Lifestyle</h2>

    <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 w-full gap-1 mx-auto container px-2 py-10">
        @foreach ($lifestyles as $lifestyle)
            <div>
                {{ $lifestyle->description }}
                <img class="w-full h-full bg-cover object-cover rounded-lg"
                    src="{{ $lifestyle->getFirstMediaUrl('lifestyle') }}" />
            </div>
        @endforeach
    </div>
    @if (Request::is('/'))
        <a class="rounded-full border border-black px-10 py-3 mx-auto block w-fit my-4" wire:navigate.live href="/lifestyle">
            <button>Още от Lifestyle</button>
        </a>
    @endif
</div>
