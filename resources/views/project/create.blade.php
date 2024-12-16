<x-layout>
    Create project
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="dark:text-black">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="file" name="image" id="image">
        <x-primary-button type="submit">
            Submit
        </x-primary-button>
    </form>
</x-layout>
