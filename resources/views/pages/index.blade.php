@extends("layout.layout")

@section("content")
  <div x-data="{count: 1}">
    <h1 class="text-6xl underline text-cyan-600">
      Prostě začni Adame
    </h1>

    <h2 x-text="count.toString()"></h2>
    <button @click="count++">Plus</button>
  </div>
@endsection
