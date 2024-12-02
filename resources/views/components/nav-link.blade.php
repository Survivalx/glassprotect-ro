@props(['active' => false, 'type' => 'a'])
@if ($type == 'a')
    <a class="{{ $active ? 'bg-gradient-to-bl from-indigo-300 to-indigo-700 text-white' : 'text-slate-950 hover:bg-indigo-100 hover:text-black hover:-translate-y-1 transition-all' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
@else
    <button
        class="{{ $active ? 'bg-gray-900 text-white transition-all' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</button>
@endif
