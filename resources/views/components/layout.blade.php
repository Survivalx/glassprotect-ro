<head>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('themeSwitcher', () => ({
                darkMode: false,
                init() {
                    this.darkMode = localStorage.getItem('theme') === 'dark';
                    this.applyTheme();
                },
                toggleTheme() {
                    this.darkMode = !this.darkMode;
                    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
                    this.applyTheme();
                },
                applyTheme() {
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                }
            }));
        });
        Alpine.start();
    </script>
    <title>Glass Protect RO</title>
    <link rel="shortcut icon" href={{ asset('images/whitegpro.svg') }} type="image/x-icon">
</head>
<div class="dark:bg-gray-900 dark:text-white">
    <div class="w-11/12 border-x-gray-500  border-x-2 m-auto" x-data="themeSwitcher" x-init="init()">
        <header class="py-2 flex justify-between items-center">
            <div>

                <a href="{{ route('home') }}">
                    <img class="h-16" x-show="!darkMode" src="{{ asset('images/glass-protect-original.png') }}"
                        alt="Light Theme Image">
                </a>
            </div>
            <div class="menu space-x-1 ">
                <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
                <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
                <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
                <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
                <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                <x-nav-link href="/policies" :active="request()->is('policies')">GDPR & Policies</x-nav-link>
            </div>
            <button @click="toggleTheme()" class="p-2 bg-indigo-200 dark:bg-gray-800 rounded-full"><x-eos-light-mode
                    class="w-4 h-4 dark:text-white" /></button>
        </header>
        <div>
            {{ $slot }}
        </div>
        <footer class="mt-[1000px]">footer</footer>
    </div>
</div>
