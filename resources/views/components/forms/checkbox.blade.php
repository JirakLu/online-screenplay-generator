<div class="flex items-center">
    <input id="{{ $id }}" name="{{ $name }}" type="checkbox"
        {{ $attributes->class(["h-4 w-4 rounded border-gray-300 text-cyan-600 focus:ring-cyan-500"]) }}
    >
    <label for="{{ $id }}" class="ml-2 block text-sm text-gray-900">{{ $slot }}</label>
</div>
