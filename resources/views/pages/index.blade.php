@php use App\Models\User; @endphp
@extends("layout.layout")

@php
    $users = User::all()
@endphp

@section("content")

@endsection
