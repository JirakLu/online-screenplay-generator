<x-layout.dashboard-layout :title="'Scenarista | ' . $script->name">
    <pre>{!! $script->toJson(JSON_PRETTY_PRINT) !!}</pre>
</x-layout.dashboard-layout>
