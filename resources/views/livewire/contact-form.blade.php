<div>

    <form wire:submit.prevent="submit" class="max-w-xl mx-auto">
        <div class="grid grid-cols-2 justify-items-start gap-x-4 mb-1">
            <label for="name" class="text-sm font-medium @error('name') text-red-900 @enderror">Име</label>
            <label for="secondname"
                class="text-sm font-medium @error('secondname') text-red-900 @enderror">Фамилия</label>
        </div>
        <div class="mainc grid grid-cols-2 gap-x-4">
            <input type="text" id="name" wire:model="name"
                class="text-sm focus:ring-[#2EE9A5] w-full p-2 hover:ring-[#2EE9A5] hover:ring-2 mb-4 rounded-md"
                placeholder="Име">
            <input type="text" id="secondname" wire:model="secondname"
                class="text-sm focus:ring-[#2EE9A5] w-full p-2 hover:ring-[#2EE9A5] hover:ring-2 mb-4 rounded-md"
                placeholder="Фамилия">
            @error('name')
                <span class="text-red-900 text-sm">{{ $message }}</span>
            @enderror
             @error('secondname')
                <span class="text-red-900 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="number" class="text-sm font-medium  @error('number') text-red-900 @enderror">Телефон</label>
            <input id="number" wire:model="number"
                class="mt-1 appearance-none text-sm focus:ring-[#2EE9A5] block w-full p-2 hover:ring-[#2EE9A5] hover:ring-2 mb-4 rounded-md"
                placeholder="Номер">
            @error('number')
                <span class="text-red-900 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6 mt-4">
            <label for="email" class="text-sm font-medium @error('email') text-red-900 @enderror">Имейл</label>
            <input type="email" id="email" wire:model="email"
                class="mt-1 text-sm focus:ring-[#2EE9A5] block w-full p-2 hover:ring-[#2EE9A5] hover:ring-2 mb-4 rounded-md"
                placeholder="Твоят имейл">
            @error('email')
                <span class="text-red-900 text-sm">{{ $message }}</span>
            @enderror

            <label for="body"
                class="block mt-5 text-sm font-medium @error('body') text-red-900 @enderror">Съобщение</label>
            <textarea aria-label="textarea" rows="6" name="body" maxlength="500" wire:model="body"
                class="mt-1 resize-none text-sm focus:ring-[#2EE9A5] block w-full hover:ring-[#2EE9A5] hover:ring-2 rounded-md">
            </textarea>
            @error('body')
                <span class="text-red-900 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-black focus:ring-4 focus:outline-none font-medium text-sm w-full py-2.5 text-center rounded-md">Изпрати</button>
    </form>

</div>
