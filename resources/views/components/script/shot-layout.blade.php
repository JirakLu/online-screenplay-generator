<div>
    <h3>Druh záběru</h3>
    <x-forms.select label="Od" name="form" :options="$shotTypes" :selected="$shot->shot_type_from"/>
    <x-forms.select label="Do" name="to" :options="$shotTypes" :selected="$shot->shot_type_to"/>
    <h3>Dialogy</h3>
    @foreach($shot->monologs as $monolog)
    <div>
        <x-forms.select label="Postava" name="character" :options="$characterNames" :selected="$monolog->character_id"/>
        <x-forms.textarea label="Text" name="text" :value="$monolog->text" required/>
    </div>
    @endforeach
</div>
