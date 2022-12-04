<x-layout.dashboard-layout x-data="{
    isAddModalOpen: false,
    onCloseAddModal() {
        this.isAddModalOpen = false
    },
}">
    <x-layout.container class="py-6 space-y-6">
        <h1 class="text-3xl font-semibold text-gray-900">Scénáře</h1>
        <div class="bg-white lg:min-w-0 lg:flex-1">
            <ul role="list" class="space-y-5">
                @foreach($scripts as $script)
                    <x-script-card
                        :id="$script->id"
                        :name="$script->name"
                        :description="$script->description"
                        :updated-at="$script->updated_at"
                    />
                @endforeach
            </ul>
        </div>
    </x-layout.container>

    <x-modal.modal is-open="isAddModalOpen" on-close="onCloseAddModal">
        <form action="">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Nový scénář
                    </h3>
                    <div class="mt-2">
                        <x-forms.input label="Název" name="name" required/>
                        <!-- todo textarea component -->
                        <label for="description">Popis:</label>
                        <textarea name="description" id="" class=""></textarea>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-x-3">
                <x-buttons.primary-button type="link" :href="route('script')">
                    Vytvořit
                </x-buttons.primary-button>
                <x-buttons.secondary-button type="button" @click="onCloseAddModal">
                    Zrušit
                </x-buttons.secondary-button>
            </div>
        </form>
    </x-modal.modal>
</x-layout.dashboard-layout>

