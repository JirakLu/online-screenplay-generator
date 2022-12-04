<x-layout.dashboard-layout :title="'Scenarista | ' . $script->name">
    <div class="m-6">
        <pre>{!! $script->toJson(JSON_PRETTY_PRINT) !!}</pre>

        <form action="">
    <h1 class="font-bold">{{$script->name}}</h1>
        <h2>{{$script->description}}</h2>
     @if($script->scenes->count() == 0)
{{--         <x-script.scene></x-script.scene>--}}
     @endif
    @foreach($script->scenes as $scene)
        <div class="my-6">
            <h2>Scéna {{$scene->number}}</h2>
            <x-script.scene-layout :scene="$scene" :scene-types="$sceneTypes" :shot-types="$shotTypes"></x-script.scene-layout>
        </div>
    @endforeach
        </form>
    </div>
</x-layout.dashboard-layout>
