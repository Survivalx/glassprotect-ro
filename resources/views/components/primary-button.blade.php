<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 transition-all active:bg-indigo-700']) }}>
    {{ $slot }}
</button>
