<x-layout>
    <div>
        <div class="flex justify-end items-center gap-3">
            <a class="text-sky-500 h-fit w-fit bg-sky-100 hover:bg-sky-200 border border-sky-100 hover:border-sky-300 trasition-all py-2 px-3 rounded-md"
                href={{ route('products.edit', $product->id) }}>Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="h-fit w-fit text-red-500 bg-red-100 border-red-100 border hover:border-red-300 py-2 px-3 rounded-md hover:bg-red-200 transition-all"
                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-2 mt-20 items-start py-3 border-gray-800 justify-between m-auto">
        <div>
            <img class="w-9/12 rounded-lg" src={{ $product->image }} alt="">
        </div>
        <div>
            <h1 class="text-4xl font-thin">{{ $product->title }}</h1>
            <h2>{{ $product->price_data }}</h2>
            <h3>{{ $product->short_description }}</h3>
            <h4>{{ $product->long_description }}</h4>

        </div>
    </div>
</x-layout>
