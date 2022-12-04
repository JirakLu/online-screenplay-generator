<div x-data="{ isSidebarOpen:false }">

    {{--  Mobile  --}}
    <div class="relative z-20 md:hidden" role="dialog" aria-modal="true"
         x-show="isSidebarOpen"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <div class="fixed inset-0 bg-gray-600/75"></div>

        <div class="fixed inset-0 z-20 flex"
             x-show="isSidebarOpen"
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in-out duration-300 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">

            <div class="relative flex w-full max-w-xs flex-1 flex-col bg-white"
                 x-show="isSidebarOpen"
                 x-transition:enter="ease-in-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="ease-in-out duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0">

                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" @click="isSidebarOpen = false"
                            class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Zavřít sidebar</span>

                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div class="h-0 flex-1 overflow-y-auto pt-5 pb-4">
                    <div class="flex flex-shrink-0 items-center px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-8 h-8 text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                    </div>
                    <nav class="mt-5 space-y-1 px-2">
                        <a href="{{ route("dashboard") }}"
                           class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <svg class="text-gray-400 group-hover:text-gray-500 mr-4 flex-shrink-0 h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                            </svg>
                            Scénáře
                        </a>

                        <button type="button" @click="isAddModalOpen = true"
                                class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5"
                                 stroke="currentColor"
                                 class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                            </svg>
                            Nový scénář
                        </button>
                    </nav>
                </div>
                <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                    <div class="flex items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor"
                                 class="inline-block h-10 w-10 rounded-full">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</p>
                            <a href="{{ route("logout") }}"
                               class="text-sm font-medium text-gray-500 hover:text-gray-700">
                                Odhlásit se
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-14 flex-shrink-0"></div>
        </div>
    </div>

    {{--  Desktop  --}}
    <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
        <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-white">
            <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
                <div class="flex flex-shrink-0 items-center px-6 py-4">
                    <x-svg.logo/>
                </div>
                <nav class="mt-5 flex-1 flex gap-1 flex-col items-stretch bg-white px-2">
                    <a href="{{ route("dashboard") }}"
                       class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z"/>
                        </svg>
                        Scénáře
                    </a>

                    <button type="button" @click="isAddModalOpen = true"
                            class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="text-gray-400 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                        </svg>
                        Nový scénář
                    </button>

                </nav>
            </div>
            <div class="flex flex-shrink-0 border-t border-gray-200 p-4">
                <div class="flex items-center">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor"
                             class="inline-block h-10 w-10 rounded-full">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name }}</p>
                        <a href="{{ route("logout") }}"
                           class="text-sm font-medium text-gray-500 hover:text-gray-700">
                            Odhlásit se
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-1 flex-col md:pl-64">
        <div class="sticky top-0 z-10 bg-gray-100 pl-1 pt-1 sm:pl-3 sm:pt-3 md:hidden">
            <button type="button" @click="isSidebarOpen = true"
                    class="-ml-0.5 -mt-0.5 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <span class="sr-only">Otevřít sidebar</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</div>
