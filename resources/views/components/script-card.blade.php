<li class="p-4 sm:p-6 border border-gray-200 rounded-lg">
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
                {{--        TODO: connect to CRUD        --}}
                {{--        Export        --}}
                <a href=""
                   class="group w-9 h-9 grid place-items-center rounded-lg bg-gray-100 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-5 w-5 text-gray-600 group-hover:text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                    </svg>
                </a>
                {{--        Delete        --}}
                <button @click="isDeleteModalOpen = true"
                        class="group w-9 h-9 grid place-items-center rounded-lg bg-gray-100 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor"
                         class="h-5 w-5 text-gray-600 group-hover:text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                    </svg>

                </button>
            </div>
            {{--        TODO: connect to CRUD        --}}
            <x-buttons.primary-button type="link" href="">
                Upravit
            </x-buttons.primary-button>
        </div>
    </div>
</li>
