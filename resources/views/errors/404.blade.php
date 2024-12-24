<x-layout>
    <div class="h-full w-full flex items-center m-auto justify-items-center justify-center">
        <div class="flex flex-col items-center m-auto justify-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200">404</h1>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Page not found</h2>
            <p class="text-lg text-gray-800 dark:text-gray-200">Sorry, the page you are looking for, could not be found.
            </p>
            <x-primary-button class="mt-5" href="{{ route('home') }}">Go back to Home</x-primary-button>
        </div>
    </div>
</x-layout>
