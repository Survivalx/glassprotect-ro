<x-layout>
    <div class="flex justify-center items-center min-h-screen">
        <form action="/products" method="POST" class="w-full max-w-lg bg-white dark:bg-gray-800 p-8 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 dark:text-gray-300">Title</label>
                <input type="text" id="title" name="title"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 dark:text-gray-300">Price</label>
                <input type="text" id="price" name="price"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required>
            </div>
            <div class="mb-4">
                <label for="price_data" class="block text-gray-700 dark:text-gray-300">Price Data</label>
                <input type="text" id="price_data" name="price_data"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-4">
                <label for="short_description" class="block text-gray-700 dark:text-gray-300">Short Description</label>
                <input type="text" id="short_description" name="short_description"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            </div>
            <div class="mb-4">
                <label for="long_description" class="block text-gray-700 dark:text-gray-300">Long Description</label>
                <textarea id="long_description" name="long_description"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 dark:text-gray-300">Image URL</label>
                <input type="text" id="image" name="image"
                    class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                    required>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-500  dark:text-white rounded hover:bg-blue-700">Create
                    Product</button>
            </div>
        </form>
</x-layout>
