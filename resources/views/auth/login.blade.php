<x-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-1/2 m-auto mt-10 shadow-lg rounded-lg p-4 dark:bg-gray-800 ">
        <h1 class="w-fit m-auto text-2xl font-light">Login administrator</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="dark:text-white" />
                <x-text-input id="email" class="block mt-1 w-full dark:text-gray-950" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="dark:text-white" />

                <x-text-input id="password" class="block mt-1 w-full dark:text-gray-950" type="password"
                    name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</x-layout>
