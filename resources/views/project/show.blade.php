<x-layout>
    <div class="m-auto w-full mt-10">
        <h1 class="text-2xl w-fit m-auto">
            {{ $project->title }}
        </h1>
        <img class="w-1/2 m-auto rounded-lg mt-4" src="{{ $project->image }}" alt="">
    </div>
</x-layout>
