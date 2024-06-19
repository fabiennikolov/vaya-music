<div class="sticky top-0 z-50" x-data="{ isScrolled: false }" @scroll.window="isScrolled = window.pageYOffset > 0 ? true : false">
    <nav :class="{ '{{ Request::is('/') ? 'bg-black' : '' }}': isScrolled }"
        class="{{ !Request::is('/') ? 'bg-black block' : 'absolute' }} z-50 mx-auto w-full 2xl:px-16 px-4 transition-colors duration-300 ease-in-out top-0">
        <div class="flex items-center justify-between text-white py-4 ">
            <a wire:navigate.hover href="/">
                <p class="text-white didot text-[40px] flex justify-center items-center">VAYA</p>
            </a>
            <ul class="hidden xl:flex items-center gap-8">
                <li><a wire:navigate.hover href="/lifestyle">Vaya Lifestyle</a></li>
                <li><a wire:navigate.hover href="/news">Vaya News</a></li>
                <li><a wire:navigate.hover href="/music">Vaya Music</a></li>
                <li><a wire:navigate.hover href="/events">Събития</a></li>
                <li><a wire:navigate.hover href="/soon">Очаквайте</a></li>
                <li><a wire:navigate.hover href="/store">Магазин</a></li>
                <li><a wire:navigate.hover href="/pozdrav">Музикален поздрав</a></li>
                <li><a wire:navigate.hover href="/contacts">Контакти</a></li>
            </ul>
            <div class="hidden xl:flex">
                <a class="p-2" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M234.33 69.52a24 24 0 0 0-14.49-16.4C185.56 39.88 131 40 128 40s-57.56-.12-91.84 13.12a24 24 0 0 0-14.49 16.4C19.08 79.5 16 97.74 16 128s3.08 48.5 5.67 58.48a24 24 0 0 0 14.49 16.41C69 215.56 120.4 216 127.34 216h1.32c6.94 0 58.37-.44 91.18-13.11a24 24 0 0 0 14.49-16.41c2.59-10 5.67-28.22 5.67-58.48s-3.08-48.5-5.67-58.48m-73.74 65l-40 28A8 8 0 0 1 108 156v-56a8 8 0 0 1 12.59-6.55l40 28a8 8 0 0 1 0 13.1Z" />
                    </svg>
                </a>
                <a href="" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48" />
                    </svg>
                </a>
                <a href="" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                    </svg>
                </a>
                <a href="" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                    </svg>
                </a>
                <a href="" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12.01 22A9.978 9.978 0 0 1 4.954 4.954a9.978 9.978 0 1 1 14.111 14.111A9.919 9.919 0 0 1 12.01 22Zm-1.482-6.728a9.794 9.794 0 0 1 5.227 1.384a.59.59 0 0 0 .33.1a.632.632 0 0 0 .521-.3a.7.7 0 0 0 .042-.545a.519.519 0 0 0-.293-.3a11.039 11.039 0 0 0-5.88-1.549c-1.283.01-2.56.16-3.81.449a.628.628 0 0 0-.45.749a.656.656 0 0 0 .591.472a.56.56 0 0 0 .157-.023a16.12 16.12 0 0 1 3.565-.437Zm-.19-2.976a12.648 12.648 0 0 1 6.416 1.661c.111.08.245.124.383.124c.27-.01.518-.15.668-.373a.71.71 0 0 0 .1-.586a.622.622 0 0 0-.3-.412a14.262 14.262 0 0 0-7.268-1.911a13.768 13.768 0 0 0-3.972.56a.773.773 0 0 0-.5.952a.738.738 0 0 0 .741.523a.85.85 0 0 0 .213-.025a11.66 11.66 0 0 1 3.52-.513Zm.19-3.088a14.987 14.987 0 0 1 7.376 1.7c.153.084.326.127.5.125a1 1 0 0 0 .8-.373a.985.985 0 0 0 .088-.724a.91.91 0 0 0-.436-.574a16.838 16.838 0 0 0-8.337-1.964a17.36 17.36 0 0 0-4.758.614a.915.915 0 0 0 .287 1.789a.916.916 0 0 0 .262-.038a14.7 14.7 0 0 1 4.217-.556v.001Z" />
                    </svg>
                </a>
                <a href="" class="p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M17.05 20.28c-.98.95-2.05.8-3.08.35c-1.09-.46-2.09-.48-3.24 0c-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8c1.18-.24 2.31-.93 3.57-.84c1.51.12 2.65.72 3.4 1.8c-3.12 1.87-2.38 5.98.48 7.13c-.57 1.5-1.31 2.99-2.54 4.09zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25c.29 2.58-2.34 4.5-3.74 4.25" />
                    </svg>
                </a>
            </div>
            <div class="xl:hidden block" x-data="{ open: false }">

                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition class="absolute bg-gray-800 w-full left-0 top-0 h-svh py-4 space-y-6">
                    <button @click="open = !open" class="text-white focus:outline-none block left-4 absolute">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                        </svg>
                    </button>
                    <ul class="text-white flex flex-col items-center space-y-6 text-lg">
                        <li><a wire:navigate.hover href="/">Начало</a></li>
                        <li><a wire:navigate.hover href="/lifestyle">Vaya Lifestyle</a></li>
                        <li><a wire:navigate.hover href="/news">Vaya News</a></li>
                        <li><a wire:navigate.hover href="/music">Vaya Music</a></li>
                        <li><a wire:navigate.hover href="/events">Събития</a></li>
                        <li><a wire:navigate.hover href="/soon">Очаквайте</a></li>
                        <li><a wire:navigate.hover href="/store">Магазин</a></li>
                        <li><a wire:navigate.hover href="/pozdrav">Музикален поздрав</a></li>
                        <li><a wire:navigate.hover href="/contacts">Контакти</a></li>
                    </ul>
                    <p class="text-center pt-4">Последвайте ме</p>
                    <div class="flex mx-auto w-fit">
                        <a class="p-2" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M234.33 69.52a24 24 0 0 0-14.49-16.4C185.56 39.88 131 40 128 40s-57.56-.12-91.84 13.12a24 24 0 0 0-14.49 16.4C19.08 79.5 16 97.74 16 128s3.08 48.5 5.67 58.48a24 24 0 0 0 14.49 16.41C69 215.56 120.4 216 127.34 216h1.32c6.94 0 58.37-.44 91.18-13.11a24 24 0 0 0 14.49-16.41c2.59-10 5.67-28.22 5.67-58.48s-3.08-48.5-5.67-58.48m-73.74 65l-40 28A8 8 0 0 1 108 156v-56a8 8 0 0 1 12.59-6.55l40 28a8 8 0 0 1 0 13.1Z" />
                            </svg>
                        </a>
                        <a href="" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.6 5.82s.51.5 0 0A4.278 4.278 0 0 1 15.54 3h-3.09v12.4a2.592 2.592 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48" />
                            </svg>
                        </a>
                        <a href="" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4zm9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3" />
                            </svg>
                        </a>
                        <a href="" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                            </svg>
                        </a>
                        <a href="" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12.01 22A9.978 9.978 0 0 1 4.954 4.954a9.978 9.978 0 1 1 14.111 14.111A9.919 9.919 0 0 1 12.01 22Zm-1.482-6.728a9.794 9.794 0 0 1 5.227 1.384a.59.59 0 0 0 .33.1a.632.632 0 0 0 .521-.3a.7.7 0 0 0 .042-.545a.519.519 0 0 0-.293-.3a11.039 11.039 0 0 0-5.88-1.549c-1.283.01-2.56.16-3.81.449a.628.628 0 0 0-.45.749a.656.656 0 0 0 .591.472a.56.56 0 0 0 .157-.023a16.12 16.12 0 0 1 3.565-.437Zm-.19-2.976a12.648 12.648 0 0 1 6.416 1.661c.111.08.245.124.383.124c.27-.01.518-.15.668-.373a.71.71 0 0 0 .1-.586a.622.622 0 0 0-.3-.412a14.262 14.262 0 0 0-7.268-1.911a13.768 13.768 0 0 0-3.972.56a.773.773 0 0 0-.5.952a.738.738 0 0 0 .741.523a.85.85 0 0 0 .213-.025a11.66 11.66 0 0 1 3.52-.513Zm.19-3.088a14.987 14.987 0 0 1 7.376 1.7c.153.084.326.127.5.125a1 1 0 0 0 .8-.373a.985.985 0 0 0 .088-.724a.91.91 0 0 0-.436-.574a16.838 16.838 0 0 0-8.337-1.964a17.36 17.36 0 0 0-4.758.614a.915.915 0 0 0 .287 1.789a.916.916 0 0 0 .262-.038a14.7 14.7 0 0 1 4.217-.556v.001Z" />
                            </svg>
                        </a>
                        <a href="" class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M17.05 20.28c-.98.95-2.05.8-3.08.35c-1.09-.46-2.09-.48-3.24 0c-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8c1.18-.24 2.31-.93 3.57-.84c1.51.12 2.65.72 3.4 1.8c-3.12 1.87-2.38 5.98.48 7.13c-.57 1.5-1.31 2.99-2.54 4.09zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25c.29 2.58-2.34 4.5-3.74 4.25" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
