@extends("layout.layout")

@section("content")
    <h1>Ty jsi asi přihlášený</h1>
    <a href="{{ route("logout") }}">Odhlaš se</a>
@endsection
