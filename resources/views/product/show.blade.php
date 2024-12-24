<x-layout>

    <div>
        @auth {{-- Admin can access --}}
            <div class="flex justify-end items-center gap-3 mt-10">
                <a class="text-sky-500 h-fit w-fit bg-sky-100 hover:bg-sky-200 border border-sky-100 hover:border-sky-300 dark:hover:bg-sky-700 dark:transition-all dark:bg-sky-600 dark:text-sky-100 dark:border-sky-500 trasition-all py-2 px-3 rounded-md"
                    href={{ route('products.edit', $product->id) }}>Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="h-fit w-fit text-red-500 bg-red-100 border-red-100 border hover:border-red-300 py-2 px-3 rounded-md hover:bg-red-200 dark:hover:bg-red-700 dark:bg-red-600 dark:text-red-100 dark:border-red-500 transition-all">Delete</button>
                    {{-- onclick="return confirm('Are you sure you want to delete this product?')" --}}
                </form>
            </div>
        @endauth
    </div>

    <div class="flex m-auto justify-around mt-20 items-start py-3 border-gray-800">
        <div class="slider rounded-xl border m-auto w-[600px]">
            <div class="slides m-auto">
                @php
                    $imagePaths = explode(',', $product->images);
                @endphp

                @foreach ($imagePaths as $imagePath)
                    <div class="slide">
                        <img class="object-cover flex m-auto" src="{{ asset('storage/' . $imagePath) }}"
                            alt="{{ $product->title }}">
                    </div>
                @endforeach
            </div>
            <button class="prev hover:bg-slate-600/80 bg-gray-400/80 px-2 py-2 transition-all"
                onclick="moveSlide(-1)"><x-heroicon-o-chevron-left class="w-6" /></button>
            <button class="next hover:bg-slate-600/80 bg-gray-400/80 px-2 py-2 transition-all"
                onclick="moveSlide(1)"><x-heroicon-o-chevron-right class="w-6" /></button>
        </div>
        <div class="space-y-3 flex flex-col items-start justify-items-start w-1/2 m-auto">
            <h1 class="text-4xl w-fit text-wrap break-words font-thin">{{ $product->title }}</h1>
            <div class="border-b py-2 dark:border-white/10 w-fit">
                <p class="text-xs font-thin dark:text-white/30 w-fit">Price</p>
                <h1 class="text-xl font-thin dark:bg-slate-600 bg-slate-300 py-2 px-3 rounded-md w-fit">
                    {{ $product->price }} €</h1>
            </div>
            <div class="flex flex-col w-fit">
                <p class="text-xs w-fit font-thin dark:text-white/30">Price Data</p>
                <h2 class="font-extralight w-fit text-xl">{{ $product->price_data }}</h2>
            </div>
            <div class="flex flex-col">
                <p class="text-xs w-fit font-thin dark:text-white/30">Short Description</p>
                <h3 class="font-extralight w-fit text-xl">{{ $product->short_description }}</h3>
            </div>

        </div>

        <script>
            let currentSlide = 0;

            function showSlide(index) {
                const slides = document.querySelectorAll('.slide');
                if (index >= slides.length) {
                    currentSlide = 0;
                } else if (index < 0) {
                    currentSlide = slides.length - 1;
                } else {
                    currentSlide = index;
                }
                const offset = -currentSlide * 100;
                document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
            }

            function moveSlide(step) {
                showSlide(currentSlide + step);
            }

            document.addEventListener('DOMContentLoaded', () => {
                showSlide(currentSlide);
            });
        </script>

        <style>
            .slider {
                position: relative;
                overflow: hidden;
            }

            .slides {
                display: flex;
                transition: transform 0.5s ease-in-out;
            }

            .slide {
                min-width: 100%;
                box-sizing: border-box;
            }

            .prev,
            .next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                color: white;
                border: none;
                border-radius: 100px;
                cursor: pointer;
            }

            .prev {
                left: 10px;
            }

            .next {
                right: 10px;
            }
        </style>
    </div>



    <div class="">
        <div class="w-3/5 m-auto my-20 border-white/15 border px-10 py-5 rounded-md">
            <p class="text-xs font-thin dark:text-white/30">Long Description</p>
            <h4 class="font-extralight break-words text-md">{{ $product->long_description }}</h4>
        </div>
    </div>
    <div
        class="w-4/5 dark:border-gray-700 border rounded-md m-auto mt-20 dark:bg-gray-800 p-10 shadow-md dark:shadow-none">
        <h1 class="text-3xl font-extralight mb-3 dark:text-white/70">Product Specification</h1>
        <div class="flex flex-col items-center">


            @if (count($productSpecs) < 1)
                <h1 class="dark:text-white/60 text-black/60">...No specifications yet...</h1>
            @else
                @foreach ($productSpecs as $spec)
                    <div class="w-full my-2">
                        <div
                            class="flex border-b border-dashed dark:border-white/20 border-black/20 w-full justify-between pb-2 mb-1">
                            <h1 class="text-xl dark:text-white/60 font-thin">{{ $spec->specKey }}</h1>
                            <h1 class="text-xl font-semibold">{{ $spec->specValue }}</h1>
                        </div>
                        @auth {{-- Admin can access --}}
                            <form class="relative right-10 bottom-12" class="pb-2 ml-2"
                                action="{{ route('products.specs.destroy', $spec->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-0 text-red-500 hover:text-red-700 transition-all p-1 rounded-full"
                                    type="submit"><x-clarity-remove-line class="w-8" /></button>
                            </form>
                        @endauth
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    @auth {{-- Admin can access --}}
        {{-- Custom specs here is the create level --}}
        <div>
            <h1 class="text-2xl w-fit m-auto mt-20">Add Product specifications type and value</h1>
            <div class="w-1/2 m-auto">
                <form action="{{ route('products.specs.store', $product->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="specKey" class="block text-gray-700 dark:text-gray-300/80">Specification Type</label>
                        <input type="text" id="specKey" name="specKey"
                            class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <x-input-error :messages="$errors->get('specKey')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <label for="specValue" class="block text-gray-700 dark:text-gray-300/80">Specification Value</label>
                        <input type="text" id="specValue" name="specValue"
                            class="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <x-input-error :messages="$errors->get('specValue')" class="mt-2" />
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="transition-all px-4 py-2 bg-blue-700  text-white rounded hover:bg-blue-800">Add
                            specification</button>
                    </div>
                </form>
            </div>
        </div>
    @endauth

</x-layout>
