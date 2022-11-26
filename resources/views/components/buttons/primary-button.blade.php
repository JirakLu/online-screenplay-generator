<button
    type="{{ $type }}"
    {{ $attributes->class(["flex justify-center rounded-md border border-transparent bg-cyan-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 transition-colors"]) }}>
    {{ $slot }}
</button>
