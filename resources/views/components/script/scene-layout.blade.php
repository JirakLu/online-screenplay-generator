<div x-data="{ shot: 1 }" class="p-4 sm:p-6 border border-gray-200 rounded-lg">
    <div class="flex gap-3 w-full">
        <div>
            <x-forms.input label="Místo" name="location" type="text" :value="$scene->location"
                           class="max-w-xs"/>
            <x-forms.select label="Typ" name="type" :options="$sceneTypes" :selected="$scene->scene_type_id"
                            class="max-w-xs"/>
        </div>
        <x-forms.textarea label="Popis" name="description" :value="$scene->description"
                          outer-classname="w-full"/>
    </div>
    {{--    <x-forms.select-multiple label="Něco" name="test" :select-options="$characters"></x-forms.select-multiple>--}}
    @if($scene->count() == 0)
        <div>
            <h2 class="text-xl font-medium text-gray-700 mt-4">Záběr <span x-text="shot"></span></h2>
            <x-script.shot-layout :shot="$shot" :characters="$characters" :shot-types="$shotTypes"/>
        </div>
    @else
        @foreach($scene->shots as $shot)
            <div>
                <h2 class="text-xl font-medium text-gray-700 mt-4">Záběr {{$shot->number}}</h2>
                <x-script.shot-layout :shot="$shot" :characters="$characters" :shot-types="$shotTypes"/>
            </div>
        @endforeach
    @endif
    <x-buttons.scene-button type="button" class="mt-3">Přidat scénu</x-buttons.scene-button>
</div>

