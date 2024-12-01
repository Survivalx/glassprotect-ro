@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-500'
            : 'hover:bg-sky-600 hover:text-white leading-normal transition-all px-3 py-2 rounded-lg font-bold text-black';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
