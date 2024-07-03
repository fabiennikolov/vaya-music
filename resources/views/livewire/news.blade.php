<section class="bg-white">

    <div class="px-4 py-6 md:p-12 max-w-7xl mx-auto justify-center items-center">
        @if (isset($newss) && count($newss) > 0)
            <h1 class="mb-10 text-3xl font-semibold text-center uppercase">Новини от Vaya-Music
            </h1>
        @endif
    </div>

    @if (isset($newss) && count($newss) > 0)
        <div class="grid gap-4 md:gap-12 xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 px-2 mb-4">
            @foreach ($newss as $news)
                <article class="mx-auto flex w-full max-w-md flex-col justify-between rounded-2xl shadow-md border-transparent p-2">
                    @if ($news->images->isNotEmpty())
                        <a wire:navigate.hover href="/news/{{ $news->slug }}">
                            <img class="aspect-video w-full rounded-t-2xl object-cover object-center" alt="Vaya - news"
                                width="450" height="675" src="{{ $news->getFirstMediaUrl('news') }}" />
                        </a>
                    @endif
                    <div class="flex flex-col justify-between flex-grow pt-1">
                        <div>
                            <p class="text-[#99416F] text-sm mb-2">{{ $news->category }}</p>
                            <h2 class="text-2xl font-medium text-slate-800"><a wire:navigate.hover
                                    href="/news/{{ $news->slug }}">{{ $news->title }}</a></h2>
                            <p class="text-sm tracking-tight font-light text-slate-700 leading-6">
                                {{ $news->description }}</p>
                        </div>
                        <a class="w-fit font-medium duration-500 transform-gpu items-center mt-2 bg-[#F1C9DE] hover:bg-pink-300 rounded-lg px-4 py-2" wire:navigate.hover
                            href="/news/{{ $news->slug }}">
                            Прочети още
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <p class="text-center my-24">В момента няма нови блогове</p>
    @endif
</section>
