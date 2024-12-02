{{-- @props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-red-500'
            : 'hover:bg-sky-600 hover:text-white leading-normal transition-all px-3 py-2 rounded-lg font-bold text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> --}}


@props(['active' => false, 'type' => 'a'])
{{-- bg-indigo-500 -> is active(); --}}
@if ($type == 'a')
    <a class="{{ $active ? 'bg-gradient-to-bl from-indigo-300 to-indigo-700 text-white' : 'text-slate-950 hover:bg-indigo-100 hover:text-black transition-all' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
@else
    <button
        class="{{ $active ? 'bg-gray-900 text-white transition-all' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</button>
@endif
