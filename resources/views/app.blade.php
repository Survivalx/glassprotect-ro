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
        <h1 class="text-2xl font-semibold w-4/6">Pentru toate aceste construcții de sticlă securizată, echipa Glass Protect asigură următoarele tipuri de servicii:</h1>
        <x-benefit-cards />
    </div>



</x-layout>
