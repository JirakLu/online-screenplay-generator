<div class="p-4 sm:p-6 border border-gray-200 rounded-lg">
        <x-forms.input label="Místo" name="location" type="text" :value="$scene->location" required/>
        <x-forms.select label="Typ" name="type" :options="$sceneTypes" :selected="$scene->scene_type_id"/>
        <x-forms.textarea label="Popis" name="description" :value="$scene->description" required/>
    @foreach($scene->shots as $shot)
        <h2>Záběr {{$shot->number}}</h2>
        <x-script.shot-layout :shot="$shot" :characters="$characters" :shot-types="$shotTypes"/>
    @endforeach
</div>
