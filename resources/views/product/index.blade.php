<x-layout>
    <div class="flex items-center gap-2 mt-6 mb-10 w-full m-auto justify-end">
        <a class="hover:-translate-y-1 transition-all" href={{ route('home') }}><x-heroicon-o-home
                class="w-5 text-slate-700 dark:text-white" /></a>
        <h1><x-heroicon-o-chevron-right class="w-4" /></h1>
        <a class="hover:-translate-y-1 transition-all" href="{{ route('products.index') }}" disabled>Products</a>
    </div>
    <div class="mt-10 space-y-5">
        <div>
            <h1 class="text-4xl font-thin">View All Our Products</h1>
        </div>
        <div class="w-full">
            <div class="grid grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <a href={{ route('products.show', $product->id) }}
                        class="flex cursor-pointer w-fit h-fit flex-col relative items-center gap-3 rounded-xl border px-3 py-3 border-gray-800 justify-between m-auto">
                        <div id='hover'
                            class="w-[100%] h-[100%] flex m-auto items-center justify-center overflow-hidden top-0 rounded-xl absolute  transition-all bg-blue-900/30">
                            <div id='hover-effect' class="h-full w-full transition-all text-black/0 text-white flex items-center justify-center align-middle">
                                <x-carbon-view class="h-10 w-10 text-center self-center justify-center bg-blue-300 p-2 rounded-full"/>
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
                        <img class="w-80 rounded-lg" src={{ $product->image }} alt="">
                        <h1 class="text-xl font-thin">{{ $product->title }}</h1>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
