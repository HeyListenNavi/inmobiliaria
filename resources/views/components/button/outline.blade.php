@props([
    'href' => null,
    'type' => 'button'
])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex items-center justify-center text-body-small border-2 border-highlight hover:border-highlight/80 font-semibold hover:text-highlight/80 rounded-full px-5 py-3 transition-colors']) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => 'flex items-center justify-center text-body-small border-2 border-highlight hover:border-highlight/80 font-semibold hover:text-highlight/80 rounded-full px-5 py-3 transition-colors cursor-pointer']) }}>
        {{ $slot }}
    </button>
@endif