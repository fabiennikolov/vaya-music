<section class="py-12 px-2">
    <div
        class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 container gap-4 mx-auto items-center justify-center justify-items-center">
        @foreach ($products as $product)
            <div class="aspect-[1/1] max-w-md border border-black/10 shadow-md rounded-xl">
                <img class="aspect-square object-cover w-96 h-full rounded-t-xl"
                    src="{{ $product->getFirstMediaUrl('product') }}" alt="{{ $product->title }}">
                <div class="flex justify-between p-3 text-lg">
                    <h2>{{ $product->title }}</h2>
                    <h3>{{ $product->price }}лв.</h3>
                </div>
                <button class="bg-[#F1C9DE] text-black px-12 py-2 rounded-lg m-2">Купи</button>
            </div>
        @endforeach
    </div>
    <div class="bg-purple-500 flex items-center justify-center p-8 w-8/12 mx-auto rounded-xl mt-12 shadow-md border border-black/20">
        <div class="flex flex-wrap items-center justify-center justify-items-center gap-12">
            <div class="relative">
                <div class="h-48 w-48 rounded-full overflow-hidden ring-gray-200/50 ring-8">
                    <img src="/images/event1.jpg" alt="Singer Image" class="h-full w-full object-cover bg-cover">
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold">Подари музикален поздрав на любим човек</h2>
                <button class="bg-white py-3 px-6 rounded-full mt-4">Избери песен</button>
            </div>
        </div>
    </div>
</section>
