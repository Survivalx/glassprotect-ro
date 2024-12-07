<x-layout>
    <div>
        <div class="flex justify-end items-center gap-3">
            <a class="text-sky-500 h-fit w-fit bg-sky-100 hover:bg-sky-200 border border-sky-100 hover:border-sky-300 dark:hover:bg-sky-700 dark:transition-all dark:bg-sky-600 dark:text-sky-100 dark:border-sky-500 trasition-all py-2 px-3 rounded-md"
                href={{ route('products.edit', $product->id) }}>Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="h-fit w-fit text-red-500 bg-red-100 border-red-100 border hover:border-red-300 py-2 px-3 rounded-md hover:bg-red-200 dark:hover:bg-red-700 dark:bg-red-600 dark:text-red-100 dark:border-red-500 transition-all">Delete</button>
                {{-- onclick="return confirm('Are you sure you want to delete this product?')" --}}
            </form>
        </div>
    </div>
    <div class="flex justify-evenly space-x-10 mt-20 items-start py-3 border-gray-800">

        {{-- <img class="w-9/12 rounded-lg" src={{ $product->image }} alt=""> --}}
        <img class="w-fit rounded-lg" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">

        <div class="space-y-3">
            <h1 class="text-4xl font-thin">{{ $product->title }}</h1>
            <div class="border-b py-2 dark:border-white/10 w-fit">
                <p class="text-xs font-thin dark:text-white/30 w-fit">Price</p>
                <h1 class="text-xl font-thin dark:bg-slate-600 bg-slate-300 py-2 px-3 rounded-md w-fit">{{ $product->price }} €</h1>
            </div>
            <div class="flex flex-col">
                <p class="text-xs font-thin dark:text-white/30">Price data</p>
                <h2 class="font-extralight text-xl">{{ $product->price_data }}</h2>
            </div>
            <div class="flex flex-col">
                <p class="text-xs font-thin dark:text-white/30">Short Description</p>
                <h3 class="font-extralight text-xl">{{ $product->short_description }}</h3>
            </div>
            <div>
                <p class="text-xs font-thin dark:text-white/30">Long Description</p>
                <h4 class="font-extralight text-xl">{{ $product->long_description }}</h4>
            </div>

        </div>
    </div>
</x-layout>
