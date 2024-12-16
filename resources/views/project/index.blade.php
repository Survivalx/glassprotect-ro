<x-layout>
    <h1 class="m-auto w-fit text-2xl font-light mt-10">GlassProtect projects portfolio</h1>
    <div class="w-3/6 m-auto  space-y-4 mt-5">
        @foreach ($projects as $project)
            <a class="flex py-2 px-8 justify-between m-auto items-center bg-sky-50 border-sky-100 border hover:border-sky-200 hover:bg-sky-200/40 rounded-md"
                href="{{ route('projects.show', ['project' => $project->id]) }}">
                <img class="w-20 h-20 object-cover border border-sky-700/10 rounded-lg" src="{{ $project->image }}" alt="">
                {{ $project->title }}
                <button class="hover:bg-blue-400 transition-all py-1 px-3 rounded-md hover:text-white hover:border border border-transparent bg-transparent">View -></button>
            </a>
        @endforeach
    </div>
</x-layout>
