@extends("layout.layout")

@php
    $user = \Illuminate\Support\Facades\Auth::user();
@endphp
@section("content")
    <h1>Ty jsi asi přihlášený</h1>
    <a href="{{ route("logout") }}">Odhlaš se</a>
    <pre>
        {{ $user }}
    </pre>
@endsection
