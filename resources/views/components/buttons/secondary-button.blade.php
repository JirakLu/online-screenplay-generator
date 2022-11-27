@if($type === "link" || $type === "externalLink")
    <a
        href="{{ $href }}"
        {{ $type === "externalLink" ? "rel=nofollow noreferrer noopener" : "" }}
        {{ $attributes->class(["flex justify-center rounded-md border border-cyan-600 bg-white py-2 px-4 text-sm font-medium text-cyan-600 shadow-sm hover:bg-cyan-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 transition-colors"]) }}>
        {{ $slot }}
    </a>
@else
    <button
        type="{{ $type }}"
        {{ $attributes->class(["flex justify-center rounded-md border border-cyan-600 bg-white py-2 px-4 text-sm font-medium text-cyan-600 shadow-sm hover:bg-cyan-100 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2 transition-colors"]) }}>
        {{ $slot }}
    </button>
@endif
