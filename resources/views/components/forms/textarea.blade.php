<div>
    <label
        for="{{ $id }}" @class([ "block text-sm font-medium text-gray-700" => !$hideLabel, "sr-only" => $hideLabel ])>
        {{ $label }}
    </label>
    <div class="mt-1">
        <textarea
            name="{{ $name }}"
            id="{{ $id }}"
            {{ $errors->has($name) ? "aria-invalid=true aria-describedby=$name-error" : "" }}
            {{ $attributes->class([
                "block w-full appearance-none rounded-md border px-3 py-2 placeholder-gray-400 shadow-sm focus:outline-none sm:text-sm",
                "border-gray-300 focus:border-cyan-500 focus:outline-none focus:ring-cyan-500" => !$errors->has($name),
                "border-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500" => $errors->has($name),
            ])->merge(["rows" => 4]) }}
        >
            {{ $value }}
        </textarea>
    </div>

    @error($name)
    <p class="mt-2 text-sm text-red-500" id="{{ $name }}-error">{{ $message }}</p>
    @enderror
</div>
