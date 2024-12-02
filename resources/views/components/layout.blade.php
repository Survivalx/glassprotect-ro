<head>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Glass Protect RO</title>
    <link rel="shortcut icon" href={{ asset('images/whitegpro.svg') }} type="image/x-icon">
</head>
<div class="w-11/12 border-x-gray-500 border-x-2 m-auto">
    <header class="py-2 flex justify-between items-center">
        <div>
            <a href="{{ route('home') }}">
                <img inert src={{ asset('images/GLASSPROTECT.svg') }} alt="">
            </a>
        </div>
        <div class="menu space-x-1">
            <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
            <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
            <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="/policies" :active="request()->is('policies')">GDPR & Policies</x-nav-link>
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
    <footer class="mt-[1000px]">footer</footer>
</div>
