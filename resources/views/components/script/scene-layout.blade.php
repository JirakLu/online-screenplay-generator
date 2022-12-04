<div class="p-4 sm:p-6 border border-gray-200 rounded-lg">
    <div class="flex gap-3 w-full">
        <div>
        <x-forms.input label="Místo" name="location" type="text" :value="$scene->location" required class="max-w-xs"/>
        <x-forms.select label="Typ" name="type" :options="$sceneTypes" :selected="$scene->scene_type_id" class="max-w-xs"/>
        </div>
        <x-forms.textarea label="Popis" name="description" :value="$scene->description" required outer-classname="w-full"/>
    </div>
    @foreach($scene->shots as $shot)
        <h2 class="text-xl font-medium text-gray-700 mt-4">Záběr {{$shot->number}}</h2>
        <x-script.shot-layout :shot="$shot" :characters="$characters" :shot-types="$shotTypes"/>
    @endforeach
    <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
    </button>
</div>
