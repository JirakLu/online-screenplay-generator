@php use App\Models\User; @endphp
@extends("layout.layout")

@php
    $users = User::all()
@endphp

@section("content")
    <pre>
    {{  $users->toJson(JSON_PRETTY_PRINT) }}
    </pre>
@endsection
