<button
{{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 leading-150 px-4 font-light bg-blue-600 text-white rounded-sm  transition-all hover:shadow-xl dark:hover:shadow-blue-800/25 hover:shadow-blue-100']) }}>
    {{ $slot }}
</button>
