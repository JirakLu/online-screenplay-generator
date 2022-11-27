@extends("layout.layout")

@section("content")
    <h1>Ty jsi asi přihlášený</h1>
    <a href="{{ route("logout") }}">Odhlaš se</a>
    <pre>
        {{ $script->toJson(JSON_PRETTY_PRINT) }}
    </pre>
@endsection
