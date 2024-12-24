<x-layout>
    <div id='heroSection' class="flex items-center justify-between mt-20">
        <div class="w-1/2 space-y-5">
            <h1 inert class="text-4xl font-bold">Te ajutăm sa obții un spațiu modern și să realizezi cele mai îndrăznețe
                idei!</h1>
            <p class="w-2/3">Pentru fiecare client, am selectat produse de primă clasă pe segmente de la Economic la
                Premium. Oferim
                soluții care să satisfacă cerințele de calitate, încadrându-le în orice buget.</p>
            <x-primary-button>Contact Us</x-primary-button>
        </div>
        <img class="w-1/2 h-[450px] object-cover rounded-xl" src="{{ asset('images/balustrada1.jpg') }}" alt="">
    </div>
    <div class="mt-28 space-y-6">
        <h1 class="text-2xl font-semibold w-4/6">Pentru toate aceste construcții de sticlă securizată, echipa Glass
            Protect asigură următoarele tipuri de servicii:</h1>
        <x-benefit-cards />
    </div>

    <div class="mt-28">
        <h1 class="text-2xl font-semibold w-4/6">Proiecte recente</h1>
    </div>
    <div class="mt-28">
        <h1 class="text-2xl font-semibold w-4/6 mb-3">Produsele noastre</h1>
        <div class="w-full">
            <div class="grid grid-cols-4 gap-6">
                @foreach ($recent as $product)
                    <a href={{ route('products.show', $product->id) }}
                        class="flex cursor-pointer w-fit h-fit flex-col relative items-center gap-3 rounded-xl border overflow-hidden border-gray-800 justify-between m-auto">
                        <div id='hover'
                            class="w-[100%] h-[100%] flex m-auto items-center justify-center overflow-hidden top-0 rounded-xl absolute  transition-all bg-indigo-900/20">
                            <div id='hover-effect'
                                class="h-full w-full transition-all text-black/0 text-white flex items-center justify-center align-middle">
                                <x-carbon-view
                                    class="h-10 w-10 text-center self-center justify-center bg-blue-500 shadow-blue-500 shadow-sm p-2 rounded-full" />
                            </div>
                            <style>
                                #hover {
                                    opacity: 0;
                                    transition: .25s ease-in-out;
                                }

                                #hover:hover {
                                    opacity: 1;
                                }
                            </style>
                        </div>
                        {{-- <img class="w-full" src={{ $product->image }} alt=""> --}}
                        <img class="w-full" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                        <h1 class="text-xl font-semibold w-3/4 dark:text-white/85">{{ $product->title }}</h1>
                        <div class="flex items-start justify-start">
                            <h2 class="dark:text-black font-extralight text-2xl py-2 px-3 bg-blue-200 rounded-md mb-2">
                                {{ $product->price }} € </h2>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
