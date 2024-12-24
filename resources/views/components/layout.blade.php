<head>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>Glass Protect RO</title>
    <link rel="shortcut icon" href={{ asset('images/whitegpro.svg') }} type="image/x-icon">
</head>
<div class="dark:bg-gray-900 transition-all dark:text-white bg-white">
    <div class="  m-auto" x-data="themeSwitcher" x-init="init()">
        <div class=" dark:bg-gray-950/90 bg-slate-200 m-auto">
            <div class="dark:bg-gray-900 bg-slate-100 py-2 m-auto flex ">
                <div class="m-auto flex items-center gap-1 dark:text-white">
                    <h1 class="text-sm w-fit text-black/50 dark:text-white/50">Adress</h1>
                    <a target="_blank" href="https://maps.app.goo.gl/trc8XwdLjmsH7STP7"
                        class=" font-light text-lg dark:text-white py-1 px-2 rounded-md hover:bg-slate-300 dark:hover:bg-slate-800 transition-all">str.
                        Învățător Dumitru Sima-Șetraru nr.171, sat
                        Țuțora,
                        com.
                        Țuțora, jud. Iași, România</a>
                </div>
                <div class="w-fit m-auto flex items-center gap-1">
                    <h1 class="text-sm w-fit text-black/50 dark:text-white/50">Contact</h1>
                    <a href="tel: +40755966555"
                        class="font-light text-lg text-black dark:text-white py-1 px-2 rounded-md hover:bg-slate-300 dark:hover:bg-slate-800 transition-all">+40-755-966-555

                    </a>
                </div>
            </div>
            <header class="py-4 w-11/12 m-auto flex justify-between items-center">
                <div>
                    <a href="{{ route('home') }}">
                        {{-- <img inert class="h-16" src="{{ asset('images/glass-protect-original.png') }}"
                        alt="Light Theme Logo">
                    <img inert class="h-16" src="{{ asset('images/gp-dark.png') }}" alt="Dark Theme Logo"> --}}
                        <img id="themeImage" class="h-16" alt="Theme Logo">
                    </a>
                    <script>
                        // Function to set the image based on the theme
                        function setThemeImage() {
                            const themeImage = document.getElementById('themeImage');
                            const isDarkTheme = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;

                            if (isDarkTheme) {
                                themeImage.src = "{{ asset('images/gp-dark.png') }}";
                                themeImage.alt = "Dark Theme Logo";
                            } else {
                                themeImage.src = "{{ asset('images/glass-protect-original.png') }}";
                                themeImage.alt = "Light Theme Logo";
                            }
                        }

                        // Set the image on initial load
                        setThemeImage();

                        // Listen for changes in the theme preference
                        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setThemeImage);
                    </script>
                </div>
                <div class="menu space-x-1 ">
                    <x-nav-link href="/about" :active="request()->is('about')">About Us</x-nav-link>
                    <x-nav-link href="/products" :active="request()->is('products')">Products</x-nav-link>
                    <x-nav-link href="/projects" :active="request()->is('projects')">Projects</x-nav-link>
                    <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    <x-nav-link href="/policies" :active="request()->is('policies')">GDPR & Policies</x-nav-link>
                    @auth
                        <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>


                    @endauth
                </div>
                {{-- Dark Mode switch --}}
                <div class="flex space-x-4 items-center">
                    @auth
                        <form class="" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('POST')
                            <button class="bg-gray-500 text-white py-0.5 px-2 rounded flex items-center gap-2 text-sm"
                                type="submit">Log out <x-tabler-logout class="w-4" /></button>
                        </form>
                    @endauth
                    <button id="theme-toggle"
                        class="p-2 bg-gray-200 hover:bg-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700 rounded transition-all"
                        alt='dark/light mode toggle button'>
                        <x-eos-light-mode id="theme-icon" class="w-4 h-4" />
                    </button>
                </div>
            </header>

        </div>

        <div class="w-11/12 m-auto border-x border-white/40">
            {{ $slot }}
        </div>
    </div>
    <footer class="mt-[300px] w-full bg-blue-100 dark:bg-blue-white/15 pb-2">
        <div id='containings' class="w-11/12 m-auto py-10 flex items-start justify-between">
            <img id="themeImage2" src="{{ asset('images/glass-protect-original.png') }}" class="h-16 "
                alt="Theme Logo">
            <div class=" m-auto">
                <h1 class="text-sm w-fit text-black/50">Adress</h1>
                <h1 class=" font-light text-lg dark:text-black">str. Învățător Dumitru Sima-Șetraru nr.171, sat Țuțora,
                    com. <br>
                    Țuțora, jud. Iași, România</h1>
            </div>
            <div class="w-fit m-auto">
                <h1 class="text-sm w-fit text-black/50">Contact</h1>
                <h1 class="font-light text-lg dark:text-black">+40-755-966-555

                </h1>
            </div>
        </div>
        <div id='copyright' class="w-fit m-auto">
            <h1 class="text-md text-black/50">Copyright. © glassprotect.ro - All rights are reserved. 2024</h1>
        </div>
    </footer>
</div>



















{{-- <script>
    Old fashioned dark mode toggle with button working (but without specific logotype)
    // DARK MODE TOGGLE BUTTON
    // DARK MODE TOGGLE BUTTON
    var themeToggleBtn = document.getElementById("theme-toggle");
    var themeIcon = document.getElementById("theme-icon");

    if (themeToggleBtn && themeIcon) {
        // Initial theme check
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
            themeIcon.classList.add("dark-mode-icon");
        } else {
            document.documentElement.classList.remove("dark");
            themeIcon.classList.remove("dark-mode-icon");
        }

        // Toggle theme on button click
        themeToggleBtn.addEventListener("click", function() {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
                themeIcon.classList.remove("dark-mode-icon");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
                themeIcon.classList.add("dark-mode-icon");
            }
        });
    }
</script> --}}


<script>
    // DARK MODE TOGGLE BUTTON
    var themeToggleBtn = document.getElementById("theme-toggle");
    var themeIcon = document.getElementById("theme-icon");
    var themeImage = document.getElementById('themeImage');

    function setThemeImage() {
        const isDarkTheme = document.documentElement.classList.contains("dark");

        if (isDarkTheme) {
            themeImage.src = "{{ asset('images/gp-dark.png') }}";
            themeImage.alt = "Dark Theme Logo";
        } else {
            themeImage.src = "{{ asset('images/glass-protect-original.png') }}";
            themeImage.alt = "Light Theme Logo";
        }
    }

    if (themeToggleBtn && themeIcon) {
        // Initial theme check
        if (
            localStorage.getItem("color-theme") === "dark" ||
            (!("color-theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
            themeIcon.classList.add("dark-mode-icon");
        } else {
            document.documentElement.classList.remove("dark");
            themeIcon.classList.remove("dark-mode-icon");
        }

        // Set the initial theme image
        setThemeImage();

        // Toggle theme on button click
        themeToggleBtn.addEventListener("click", function() {
            if (document.documentElement.classList.contains("dark")) {
                document.documentElement.classList.remove("dark");
                localStorage.setItem("color-theme", "light");
                themeIcon.classList.remove("dark-mode-icon");
            } else {
                document.documentElement.classList.add("dark");
                localStorage.setItem("color-theme", "dark");
                themeIcon.classList.add("dark-mode-icon");
            }
            // Update the theme image
            setThemeImage();
        });
    }
</script>
