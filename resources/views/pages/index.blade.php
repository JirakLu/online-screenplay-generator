@extends("layout.layout")

@section("content")
  <div class="flex flex-col justify-center items-center">
    <h1 class="text-4xl font-bold mt-4">
      Technický scénář
    </h1>
    <div class="bg-gray-600 w-4/5 h-full mt-6 rounded-xl flex flex-col justify-center items-center p-5">
      <div class="flex flex-row justify-between items-stretch mt-10 w-11/12">
        <x-helper>ČÍSLO<br>SCÉNY</x-helper>
        <x-helper>ČÍSLO<br>ZÁBĚRU</x-helper>
        <div class="flex flex-col justify-center items-center">
          <x-helper>DRUH ZÁBĚRU</x-helper>
          <div class="flex flex-row mt-1 justify-around items-center w-full">
            <p class="border border-white text-white rounded flex flex-row justify-center items-center px-2">
              OD
            </p>
            <p class="border border-white text-white rounded flex flex-row justify-center items-center px-2">
              DO
            </p>
          </div>
        </div>
        <x-helper>PARAMETRY<br>ZÁBĚRU</x-helper>
        <x-helper>DIALOGY</x-helper>
        <x-helper>ZVUK</x-helper>
        <x-helper>POZNÁMKY</x-helper>
      </div>
      <div class="flex flex-row justify-between items-stretch w-11/12 mt-5">
        <div class="flex flex-col justify-between items-stretch mr-5">
          <select name="environment" class="rounded px-4 py-2 text-l font-bold">
            <option disabled selected>INT/EXT/CGI</option>
            <option value="int" class="font-bold">INT</option>
            <option value="ext" class="font-bold">EXT</option>
            <option value="cgi" class="font-bold">CGI</option>
          </select>
          <input type="text" placeholder="Místo" class="rounded px-4 py-2 text-l">
          <input type="text" placeholder="Obsazení" class="rounded px-4 py-2 text-l">
        </div>
        <textarea name="picture" rows="6" placeholder="Obraz" class="w-full rounded p-3"></textarea>
      </div>
      <div class="flex flex-row w-11/12 justify-between items-stretch mt-5">
        <input type="text" value="1" class="w-10 text-white text-center" disabled>
        <input type="text" value="1" class="w-10 text-white text-center" disabled>
        <div>
          <select name="type">
            <option disabled selected>VC</option>
            <option value="vc" class="font-bold">VC</option>
            <option value="c" class="font-bold">C</option>
            <option value="am" class="font-bold">AM</option>
            <option value="pc" class="font-bold">PC</option>
            <option value="d" class="font-bold">D</option>
            <option value="vd" class="font-bold">VD</option>
          </select>
          <select name="type">
            <option disabled selected>VC</option>
            <option value="vc" class="font-bold">VC</option>
            <option value="c" class="font-bold">C</option>
            <option value="am" class="font-bold">AM</option>
            <option value="pc" class="font-bold">PC</option>
            <option value="d" class="font-bold">D</option>
            <option value="vd" class="font-bold">VD</option>
          </select>
          <input type="text">
          <textarea name="" id="" cols="5" rows="1"></textarea>
          <input type="text">
          <textarea name="" id="" cols="5" rows="1"></textarea>
        </div>
      </div>
      <div class=" w-11/12 border-b-2 border-b-white flex flex-row justify-center items-center py-3">
        <button class="rounded font-bold bg-white px-3">+</button>
      </div>
      <div class="flex flex-col justify-around items-stretch mt-3">
        <button class="rounded text-white font-bold bg-blue-600 py-3 mb-2">NOVÁ SCÉNA</button>
        <button class="rounded text-white font-bold bg-blue-600 py-3 mb-2">ULOŽIT</button>
        <button class="rounded text-white font-bold bg-red-700 px-2 py-3">EXPORT DO PDF</button>
      </div>
    </div>
  </div>
@endsection
