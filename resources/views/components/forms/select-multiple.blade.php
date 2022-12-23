    <div x-data="{ values: @json(), selected: [], open: false }">
    <form method="POST" action="https://www.hashemian.com/tools/form-post-tester.php/123456789">
        <input type="hidden" id="custId" name="custId" x-model="selected">
    </form>
    <label
        for="{{ $id }}" class="block text-sm font-medium text-gray-700" >
        {{ $label }}
    </label>
    <div @click="open = !open" class="block w-full appearance-none rounded-md bg-white border px-3 py-2 placeholder-gray-400 shadow-sm focus:outline-none sm:text-sm">
        <div class="flex gap-5">
            <template x-for="badge of selected">
                <div class="flex items-end gap-0.5">
                    <span x-text="badge"></span>
                    <div class="h-4 w-4 cursor-pointer" @click="values.push(badge); selected.splice(selected.indexOf(badge), 1)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </div>
            </template>
        </div>
        <div class="inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
    </div>
    <div class="block w-full appearance-none rounded-md bg-white border px-3 py-2 placeholder-gray-400 shadow-sm focus:outline-none sm:text-sm" x-show="open">
        <template x-for="dropdownValue of values">
            <div class="p-1 cursor-pointer hover:bg-gray-400" x-text="dropdownValue" @click="selected.push(dropdownValue); values.splice(values.indexOf(dropdownValue), 1)"></div>
        </template>
    </div>
</div>
