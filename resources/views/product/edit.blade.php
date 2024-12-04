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
                    <label for="image" class="block text-gray-700 dark:text-gray-300">Image URL</label>
                    <input type="text" id="image" name="image" value="{{ $product->image }}"
                        class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                        required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Update
                        Product</button>
                </div>
            </form>
            <div class="mt-4">
                <a href="{{ route('products.index') }}"
                    class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700">Back to Products</a>
            </div>
        </div>
    </div>
</x-layout>
