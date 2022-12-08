<div>
    <h3 class="text-base font-medium text-gray-700 mt-4">Druh záběru</h3>
    <div class="flex gap-3">
    <x-forms.select label="Od" name="form" :options="$shotTypes" :selected="$shot->shot_type_from"/>
    <x-forms.select label="Do" name="to" :options="$shotTypes" :selected="$shot->shot_type_to"/>
    </div>
    <h3 class="text-base font-medium text-gray-700 mt-4">Dialogy</h3>
    @foreach($shot->monologs as $monolog)
    <div class="flex gap-3">
        <x-forms.select label="Postava" name="character" :options="$characters" :selected="$monolog->character_id" class="min-w-[200px]"/>
        <x-forms.textarea label="Text" name="text" :value="$monolog->text" outer-classname="w-full" required/>
    </div>
    @endforeach
    <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>
    <x-forms.textarea label="Poznámka" name="comment" required/>
    <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>
</div>
