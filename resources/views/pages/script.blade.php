<x-layout.dashboard-layout x-data="{
    isAddModalOpen: false,
    onCloseAddModal() {
        this.isAddModalOpen = false
        }
    }" :title="'Scenarista | ' . $script->name">
    <button type="button" @click="isAddModalOpen = true" class="group hover:bg-gray-50 hover:text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>
    <x-modal.modal is-open="isAddModalOpen" on-close="onCloseAddModal()">
{{--TODO FIX LATER!!!--}}
        <form class="bg-white flex flex-col gap-8">
            @csrf
            <h3 class="text-2xl font-medium leading-6 text-gray-900">
                Nová postava
            </h3>
            <div class="space-y-3">
                <x-forms.input label="Křesní jméno" name="first_name" remember required/>
                <x-forms.input label="Příjmení" name="last_name" remember/>
            </div>
            <div class="flex flex-col sm:flex-row-reverse gap-3">
                <x-buttons.primary-button type="submit">
                    Vytvořit
                </x-buttons.primary-button>
                <x-buttons.secondary-button type="button" @click="onCloseAddModal">
                    Zrušit
                </x-buttons.secondary-button>
            </div>
        </form>
    </x-modal.modal>
    <div class="m-6">
        <form action="">
    <h1 class="text-4xl font-bold text-gray-700">{{$script->name}}</h1>
        <h2>{{$script->description}}</h2>
     @if($script->scenes->count() == 0)
{{--         <x-script.scene></x-script.scene>--}}
     @endif
    @foreach($script->scenes as $scene)
        <div class="my-6">
            <h2 class="text-2xl font-medium text-gray-700">Scéna {{$scene->number}}</h2>
            <x-script.scene-layout :scene="$scene" :scene-types="$sceneTypes" :shot-types="$shotTypes"></x-script.scene-layout>
        </div>
    @endforeach
        </form>
    </div>
</x-layout.dashboard-layout>
