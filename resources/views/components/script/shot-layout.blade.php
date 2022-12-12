<div x-data="{ dialog: 1 }">
    <h3 class="text-base font-medium text-gray-700 mt-4">Druh záběru</h3>
    <div class="flex gap-3">
        <x-forms.select label="Od" class="pr-10" name="form" :options="$shotTypes" :selected="$shot->shot_type_from"/>
        <x-forms.select label="Do" class="pr-10" name="to" :options="$shotTypes" :selected="$shot->shot_type_to"/>
    </div>
    <h3 class="text-base font-medium text-gray-700 mt-4">Dialogy</h3>
    @foreach($shot->monologs as $monolog)
        <div class="flex gap-3">
            <x-forms.select label="Postava" name="character" :options="$characters" :selected="$monolog->character_id"
                            class="min-w-[200px]"/>
            <x-forms.textarea label="Text" name="text" :value="$monolog->text" outer-classname="w-full"/>
        </div>
    @endforeach
    <x-buttons.scene-button type="button" class="my-3">Přidat dialog</x-buttons.scene-button>
    <x-forms.textarea label="Poznámka" name="comment"/>
    <x-buttons.scene-button type="button" class="mt-3">Přidat záběr</x-buttons.scene-button>
</div>
