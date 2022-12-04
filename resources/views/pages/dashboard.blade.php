<x-layout.dashboard-layout title="Scenarista |  Dashboard" x-data="{
    isAddModalOpen: false,
    onCloseAddModal() {
        this.isAddModalOpen = false
    },

    isDeleteModalOpen: false,
    onCloseDeleteModal() {
        this.isDeleteModalOpen = false
    },
}">
    <x-layout.container class="py-6 space-y-6">
        <h1 class="text-5xl font-semibold text-gray-900">Scénáře</h1>
        <div class="bg-white lg:min-w-0 lg:flex-1">
            <ul role="list" class="space-y-5">
                @forelse($scripts as $script)
                    <x-script-card
                        :id="$script->id"
                        :name="$script->name"
                        :description="$script->description"
                        :updated-at="$script->updated_at"
                    />
                @empty
                    <div class="flex gap-2">
                        <h1 class="text-lg">Zatím tu není žádný scénář.</h1>
                        <button @click="isAddModalOpen = true"
                                class="text-lg text-cyan-500 underline hover:text-cyan-700 transition-all">
                            Vytvořit
                            nový
                        </button>
                    </div>
                @endforelse
            </ul>
        </div>
    </x-layout.container>

    <x-modal.modal is-open="isAddModalOpen" on-close="onCloseAddModal">
        {{--    TODO: connect to CRUD    --}}
        <form action="" method="POST" class="bg-white flex flex-col gap-8">
            @csrf
            <h3 class="text-2xl font-medium leading-6 text-gray-900">
                Nový scénář
            </h3>
            <div class="space-y-3">
                <x-forms.input label="Název" name="name" required/>
                <x-forms.textarea label="Popis" name="description" required/>
            </div>
            <div class="flex flex-col sm:flex-row-reverse gap-3">
                <x-buttons.primary-button type="link" :href="route('script')">
                    Vytvořit
                </x-buttons.primary-button>
                <x-buttons.secondary-button type="button" @click="onCloseAddModal">
                    Zrušit
                </x-buttons.secondary-button>
            </div>
        </form>
    </x-modal.modal>

    <x-modal.modal is-open="isDeleteModalOpen" on-close="onCloseDeleteModal()">
        {{--    TODO: connect to CRUD    --}}
        <div class="sm:flex sm:items-start">
            <div
                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z"/>
                </svg>
            </div>
            <div class="mt-4 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-2xl font-medium leading-6 text-gray-900">Odstranit scénář</h3>
                <div class="mt-2">
                    <p class="text-sm text-gray-500">
                        Opravdu si přejete odstranit scénář? Tato akce je nevratná.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-5 sm:mt-8 sm:flex sm:flex-row-reverse">
            <button type="button"
                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">
                Odstranit
            </button>
            <button type="button"
                    @click="onCloseDeleteModal()"
                    class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 sm:mt-0 sm:w-auto sm:text-sm">
                Zrušit
            </button>
        </div>
    </x-modal.modal>
</x-layout.dashboard-layout>

