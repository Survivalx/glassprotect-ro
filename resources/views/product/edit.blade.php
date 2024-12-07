<x-layout>

    <div class="bg-white m-auto w-full text-black dark:bg-gray-900 dark:text-white">
        <div class="container mx-auto p-8 w-full flex flex-col m-auto">
            <h1 class="text-2xl m-auto font-bold mb-8">Edit Product</h1>
            <form action="{{ route('products.update', $product->id) }}" method="POST"
                class="w-full max-w-lg m-auto bg-white dark:bg-gray-800 p-8 rounded shadow-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 dark:text-gray-300">Title</label>
                    <input type="text" id="title" name="title" value="{{ $product->title }}"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        required>
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-gray-700 dark:text-gray-300">Price</label>
                    <input type="text" id="price" name="price" value="{{ $product->price }}"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        required>
                </div>
                <div class="mb-4">
                    <label for="price_data" class="block text-gray-700 dark:text-gray-300">Price Data</label>
                    <input type="text" id="price_data" name="price_data" value="{{ $product->price_data }}"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>
                <div class="mb-4">
                    <label for="short_description" class="block text-gray-700 dark:text-gray-300">Short
                        Description</label>
                    <input type="text" id="short_description" name="short_description"
                        value="{{ $product->short_description }}"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>
                <div class="mb-4">
                    <label for="long_description" class="block text-gray-700 dark:text-gray-300">Long
                        Description</label>
                    <textarea id="long_description" name="long_description"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">{{ $product->long_description }}</textarea>
                </div>
                <div class="mb-4">
                    @if ($product->image)
                        <div class="flex flex-col w-fit mb-4">
                            <img class="w-36 rounded-md" src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->title }}">
                        </div>
                    @endif
                </div>

                <div class="w-full h-[1px] bg-white/50 rounded-full my-4"></div>

                {{-- <label for="image" class="block text-gray-700 dark:text-gray-300 text-nowrap">Upload a new
                    image</label>
                <input type="file" id="image" name="image"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <x-input-error :messages="$errors->get('image')" class="mt-2" /> --}}
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Update
                            Product information</button>
                    </div>
        </div>
        </form>
        <div class="mt-4">
            <a href="{{ route('products.index') }}"
                class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">Back to Products</a>
        </div>
    </div>
    </div>
</x-layout>
