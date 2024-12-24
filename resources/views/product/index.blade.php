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
            <div class="grid grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <a href={{ route('products.show', $product->id) }}
                        class="flex cursor-pointer w-96 h-96 flex-col relative items-center gap-3 rounded-xl border overflow-hidden border-gray-400 justify-between m-auto">
                        <div id='hover'
                            class="w-[100%] h-[100%] flex m-auto items-center justify-center overflow-hidden top-0 rounded-xl absolute  transition-all bg-blue-600/10">
                            <div id='hover-effect'
                                class="h-full w-full  transition-all text-black/0 text-white flex items-center justify-center align-middle">
                                <div class="bg-slate-800/95 flex gap-1 rounded items-center py-1 px-2">
                                    <x-carbon-view
                                        class="h-6 w-6 text-center self-center justify-center  shadow-sm rounded-full" />
                                    <h2>
                                        View product
                                    </h2>
                                </div>
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
                        @php
                            $imagePaths = explode(',', $product->images);
                            $firstImagePath = $imagePaths[0];
                        @endphp

                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $firstImagePath) }}"
                            alt="{{ $product->title }}">

                        {{-- <img class="w-full h-full object-cover" src="{{ asset('storage/' . $product->image) }}" --}}
                        {{-- alt="{{ $product->title }}"> --}}


                        <div
                            class="flex items-center py-3 bg-white w-4/5 justify-between bottom-4 px-5 rounded-md shadow-lg border border-gray-100 absolute m-auto">
                            <div class="container w-3/5">
                                <h1 class="text-md font-semibold h-auto dark:text-black/70 break-words">{{ $product->title }}</h1>
                            </div>
                            <h2
                                class="dark:text-black w-fit m-auto font-extralight text-lg py-2 px-3 bg-blue-200 rounded-md">
                                {{ $product->price }} € </h2>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
