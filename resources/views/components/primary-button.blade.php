<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-3 bg-blue-600 text-white rounded-md  transition-all border-2 border-blue-600 hover:border-blue-600 hover:shadow-xl hover:shadow-blue-100']) }}>
    {{ $slot }}
</button>
