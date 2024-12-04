<x-layout>
    <div class="flex items-center gap-2 mt-6 mb-10 w-full m-auto justify-end">
        <a class="hover:translate-x-2 transform" href={{ route('home') }}><x-heroicon-o-home
                class="w-5 text-slate-700" /></a>
        <h1><x-heroicon-o-chevron-right class="w-4" /></h1>
        <a href="{{ route('products.index') }}" disabled>Products</a>
    </div>
    <div class="mt-10 space-y-5">
        <div>
            <h1 class="text-4xl font-thin">View All Our Products</h1>
        </div>
        <div class="w-full">
            <div class="flex gap-6">
                @foreach ($products as $product)
                    <a href={{ route('products.show', $product->id) }}
                        class="flex cursor-pointer flex-col items-center gap-3 rounded-xl border px-3 py-3 border-gray-800 justify-between m-auto">
                        <img class="w-80 rounded-lg" src={{ $product->image }} alt="">
                        <h1 class="text-xl font-thin">{{ $product->title }}</h1>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
