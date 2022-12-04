<li class="p-5 hover:bg-gray-50 sm:p-6 cursor-pointer border border-gray-200 rounded-lg">
    <div class="flex items-stretch justify-between space-x-4">
        <div class="min-w-0 space-y-3">
            <h2 class="text-xl font-medium">
                {{ $name }}
            </h2>
            <p class="flex items-center line-clamp-2 text-sm font-normal text-gray-500 md:max-w-xl">
                {{ $description }}
            </p>
            <p class="flex items-center text-xs font-semibold text-gray-400">
                {{ $updatedAt->format("d.m.Y H:i") }}
            </p>
        </div>

        <div
            class="flex flex-shrink-0 flex-col items-end space-y-3 justify-between">
            <div class="flex flex-row gap-x-3">
                <a href=""
                   class="group w-9 h-9 grid place-items-center rounded-lg bg-gray-100 group-hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor"
                         class="h-5 w-5 text-gray-600 group-hover:text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                    </svg>
                </a>
                <a href=""
                   class="group w-9 h-9 grid place-items-center rounded-lg bg-gray-100 group-hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                         class="h-5 w-5 fill-gray-600 group-hover:fill-gray-400">
                        <path
                            d="M424 80C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H412.4L388.4 452.7C385.9 486.1 358.1 512 324.6 512H123.4C89.92 512 62.09 486.1 59.61 452.7L35.56 128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94L354.2 80H424zM177.1 48C174.5 48 171.1 49.34 170.5 51.56L151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1zM364.3 128H83.69L107.5 449.2C108.1 457.5 115.1 464 123.4 464H324.6C332.9 464 339.9 457.5 340.5 449.2L364.3 128z"/>
                    </svg>
                </a>
            </div>
            <x-buttons.primary-button type="link" href="">
                Upravit
            </x-buttons.primary-button>
        </div>
    </div>
</li>
