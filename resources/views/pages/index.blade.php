@php use App\Models\User; @endphp
@extends("layout.layout")

@php
    $users = User::all()
@endphp

@section("content")
    <div>
        @foreach($users as $user)
            <div>{{ $user }}</div>
        @endforeach
    </div>
@endsection
