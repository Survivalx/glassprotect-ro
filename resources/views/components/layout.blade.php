<head>
    @vite('resources/css/app.css')
</head>
<div class="w-11/12 border-x-gray-500 border-x-2 m-auto">
    <header>
        <div>
            <img src="" alt="">
        </div>
    </header>
    <div>
        {{ $slot }}
    </div>
    <footer>footer</footer>
</div>
