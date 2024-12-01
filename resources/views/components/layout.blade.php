<head>
    @vite('resources/css/app.css')
</head>
<div class="w-11/12 border-x-gray-500 border-x-2 m-auto">
    <header class="py-2 flex justify-between items-center">
        <div>
            <a href="{{route('home')}}">
                <img src={{ asset('images/GLASSPROTECT.svg')}} alt="">
            </a>
        </div>
        <div class="menu space-x-1">
            <x-nav-link class="" href='/about'>DESPRE NOI</x-nav-link>
            <x-nav-link href='/about'>PRODUSE</x-nav-link>
            <x-nav-link href='/about'>PROIECTE</x-nav-link>
            <x-nav-link href='/about'>BLOG</x-nav-link>
            <x-nav-link href='/about'>CONTACTE</x-nav-link>
            <x-nav-link href='/about'>GDPR & POLITICI</x-nav-link>
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
    <footer class="mt-[1000px]">footer</footer>
</div>
