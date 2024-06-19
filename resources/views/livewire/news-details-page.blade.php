<div>
    <div class="max-w-screen-lg mx-auto">
        <main class="mt-20 mb-20">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="px-4 justify-center flex lg:px-0">
                    <h1 class="text-5xl mb-8 text-center font-semibold text-gray-800 leading-tight">
                        {{ $news->title }}
                    </h1>
                </div>
                <div
                    class="grid grid-cols-1 lg:grid-cols-3 mx-auto text-gray-500 text-sm items-center px-4 sm:px-0 xl:gap-x-64">
                    <ul class="lg:col-span-2 flex items-center gap-4">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#212121"
                                    d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V3q0-.425.288-.712T7 2t.713.288T8 3v1h8V3q0-.425.288-.712T17 2t.713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zM5 8h14V6H5zm0 0V6zm7 6q-.425 0-.712-.288T11 13t.288-.712T12 12t.713.288T13 13t-.288.713T12 14m-4 0q-.425 0-.712-.288T7 13t.288-.712T8 12t.713.288T9 13t-.288.713T8 14m8 0q-.425 0-.712-.288T15 13t.288-.712T16 12t.713.288T17 13t-.288.713T16 14m-4 4q-.425 0-.712-.288T11 17t.288-.712T12 16t.713.288T13 17t-.288.713T12 18m-4 0q-.425 0-.712-.288T7 17t.288-.712T8 16t.713.288T9 17t-.288.713T8 18m8 0q-.425 0-.712-.288T15 17t.288-.712T16 16t.713.288T17 17t-.288.713T16 18" />
                            </svg> {{ \Carbon\Carbon::parse($news->created_at)->locale('bg')->isoFormat('D MMMM Y') }}
                        </li>
                        <li class="flex items-center gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 24 24">
                                    <path fill="#000000"
                                        d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2M7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.5.88 4.93 1.78A7.893 7.893 0 0 1 12 20c-1.86 0-3.57-.64-4.93-1.72m11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33A7.928 7.928 0 0 1 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.5-1.64 4.83M12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6m0 5a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 12 8a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 12 11" />
                                </svg>
                            </div> Vaya-News
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="#212121"
                                    d="M6.5 16.038q1.31 0 2.547.301t2.453.98V7.508q-1.083-.773-2.387-1.16Q7.81 5.962 6.5 5.962q-.996 0-1.903.165T3 6.68v9.996q.702-.3 1.651-.47t1.849-.169m6 1.281q1.215-.679 2.453-.98t2.547-.3q.9 0 1.849.169q.95.169 1.651.469V6.68q-.69-.389-1.597-.554T17.5 5.962q-1.31 0-2.613.386q-1.304.387-2.387 1.16zm-.5 1.45q-1.22-.834-2.62-1.282t-2.88-.449q-1.229 0-2.42.347T2 18.3V6.07q.85-.52 2.04-.814t2.46-.294q1.47 0 2.866.423T12 6.615q1.237-.807 2.634-1.23t2.866-.423q1.271 0 2.451.294T22 6.069V18.3q-.885-.57-2.078-.915t-2.422-.347q-1.48 0-2.88.449T12 18.769m1.885-9.177v-.93q.805-.408 1.726-.612t1.889-.204q.554 0 1.063.071q.51.071 1.052.202v.908q-.523-.167-1.02-.232T17.5 8.731q-.97 0-1.892.218t-1.723.643m0 5.462v-.97q.767-.407 1.716-.61t1.899-.205q.554 0 1.063.071q.51.072 1.052.202v.908q-.523-.167-1.02-.232t-1.095-.064q-.97 0-1.892.234t-1.723.666m0-2.712v-.969q.805-.408 1.726-.611t1.889-.204q.554 0 1.063.07q.51.072 1.052.203v.907q-.523-.167-1.02-.231t-1.095-.065q-.97 0-1.892.238t-1.723.662" />
                            </svg> {{ $averageTime }}мин
                        </li>
                    </ul>
                    <div x-data="{ showModal: false }" >
                        <!-- Share button -->
                        <div @click="showModal = true"
                            class="flex items-center justify-end mt-4 lg:mt-0 gap-4 cursor-pointer w-fit border border-transparent shadow-md px-4 bg-gray-100/50 hover:bg-gray-100 duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="#212121"
                                    d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81c1.66 0 3-1.34 3-3s-1.34-3-3-3s-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65c0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92" />
                            </svg>
                            <p class="mr-1 cursor-pointer text-[#212121]">Сподели</p>
                        </div>

                        <div style="display:none ;" x-show="showModal"
                            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-25"
                            @click="showModal = false">
                            <div class="bg-white px-4 py-6 space-y-4 rounded-lg" @click.stop>
                                <h2 class="text-lg font-bold mb-4 text-black">Сподели на социални медии</h2>
                                <div class="flex justify-around">
                                    <!-- Twitter share -->
                                    <a :href="'https://twitter.com/intent/tweet?url=' + encodeURIComponent(
                                        '{{ url()->current() }}')"
                                        target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 128 128">
                                            <path
                                                d="M75.916 54.2L122.542 0h-11.05L71.008 47.06L38.672 0H1.376l48.898 71.164L1.376 128h11.05L55.18 78.303L89.328 128h37.296L75.913 54.2ZM60.782 71.79l-4.955-7.086l-39.42-56.386h16.972L65.19 53.824l4.954 7.086l41.353 59.15h-16.97L60.782 71.793Z" />
                                        </svg>
                                    </a>
                                    <a :href="'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(
                                        '{{ url()->current() }}')"
                                        target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 256 256">
                                            <path fill="#1877F2"
                                                d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.308 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.348-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.959 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445" />
                                            <path fill="#FFF"
                                                d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165z" />
                                        </svg>
                                    </a>

                                    <a :href="'https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(
                                        '{{ url()->current() }}')"
                                        target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 128 128">
                                            <path fill="#0076b2"
                                                d="M116 3H12a8.91 8.91 0 0 0-9 8.8v104.42a8.91 8.91 0 0 0 9 8.78h104a8.93 8.93 0 0 0 9-8.81V11.77A8.93 8.93 0 0 0 116 3" />
                                            <path fill="#fff"
                                                d="M21.06 48.73h18.11V107H21.06zm9.06-29a10.5 10.5 0 1 1-10.5 10.49a10.5 10.5 0 0 1 10.5-10.49m20.41 29h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75v32H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53z" />
                                        </svg>
                                    </a>
                                </div>
                                <button @click="showModal = false"
                                    class="mt-4 px-4 py-2 bg-gray-200 text-gray-800 rounded-md">Затвори</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mb-20 text-base leading-8 w-full">
                    <article class="mx-auto p-4 sm:p-0 mt-4">
                        {!! $news->content !!}
                    </article>
                </div>
        </main>
    </div>
</div>
