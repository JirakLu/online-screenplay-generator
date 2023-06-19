<x-layout.dashboard-layout x-data="{
    isAddModalOpen: false,
    isAddCharacterModalOpen: false,
    onCloseAddModal() {
        this.isAddModalOpen = false
        },
    onCloseAddCharacterModal() {
        this.isAddCharacterModalOpen = false
        }
    }" :title="'Scenarista | ' . $script->name">
    <div class="m-6">
        <form action="">
            <h1 class="text-4xl font-bold text-gray-700">{{$script->name}}</h1>
            <h2>{{$script->description}}</h2>
            <x-buttons.scene-button type="button" class="mt-3" @click="isAddCharacterModalOpen = true">Přidat postavu
            </x-buttons.scene-button>
            @if($script->scenes->count() == 0)
                {{--                TODO empty scene--}}
                {{--                <x-script.scene-layout></x-script.scene-layout>--}}
            @endif
            @foreach($script->scenes as $scene)
                <div class="my-6">
                    <h2 class="text-2xl font-medium text-gray-700">Scéna {{$scene->number}}</h2>
                    <x-script.scene-layout :scene="$scene" :scene-types="$sceneTypes"
                                           :shot-types="$shotTypes"></x-script.scene-layout>
                </div>
            @endforeach
        </form>
    </div>
</x-layout.dashboard-layout>
{{-- New scene modal --}}
<x-modal.modal is-open="isAddModalOpen" on-close="onCloseAddModal">
    <form action="{{ route("script.init") }}" method="POST" class="bg-white flex flex-col gap-8">
        @csrf
        <h3 class="text-2xl font-medium leading-6 text-gray-900">
            Nový scénář
        </h3>
        <div class="space-y-3">
            <x-forms.input label="Název" name="name" remember required/>
            <x-forms.textarea label="Popis" name="description" remember required/>
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
{{-- New character modal --}}
<x-modal.modal is-open="isAddCharacterModalOpen" on-close="onCloseAddCharacterModal()">
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
            <x-buttons.secondary-button type="button" @click="onCloseAddCharacterModal">
                Zrušit
            </x-buttons.secondary-button>
        </div>
    </form>
</x-modal.modal>
