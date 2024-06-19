<section class="py-12 bg-gray-100">
    <div>
        <h2 class="font-bold text-5xl text-center">Ochakvaite</h2>
        <div class="grid sm:grid-cols-2 container mx-auto grid-cols-1 justify-center items-center gap-4 my-4 px-2">
            {{-- Card --}}
            @foreach ($soons as $soon)
                <div
                    class="bg-white rounded-lg shadow-md p-2 max-w-sm md:max-w-none md:grid md:grid-cols-2 items-center justify-center">
                    <div class="md:order-1">
                        <img class="rounded-lg aspect-square object-cover bg-cover" src="{{$soon->getFirstMediaUrl('soon')}}" alt="Drama Queen Album Cover">
                    </div>
                    <div class="text-center mt-4 md:mt-0 md:order-2">
                        <p class="text-2xl text-[#45219F]">{{ \Carbon\Carbon::parse($soon->date)->locale('bg')->isoFormat('D MMMM Y') }}</p>
                        <h2 class="text-2xl font-medium uppercase">{{ $soon->title }}</h2>
                        <h2 class="text-2xl font-medium uppercase">Club</h2>
                        <p class="max-w-[200px] mx-auto">{{ $soon->description }}</p>
                        <button
                            class="bg-[#45219F] text-white px-10 py-4 rounded-full hover:bg-purple-700 transition-colors duration-300 mt-8">Билети</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
