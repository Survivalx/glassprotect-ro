@props(['active' => false, 'type' => 'a'])
@if ($type == 'a')
    <a class="{{ $active ? 'bg-gradient-to-bl transition-all from-blue-700 to-blue-800 text-white' : 'text-slate-950 dark:text-white dark:hover:text-black hover:bg-blue-200 dark:hover:bg-blue-200/80 hover:text-black ' }} transition-all rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
@else
    <button
        class="{{ $active ? 'bg-gray-900 text-white transition-all' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} transition-all rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</button>
@endif
