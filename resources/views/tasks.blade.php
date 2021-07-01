<!-- resources/views/tasks.blade.php -->

<x-layout>
    
    <x-slot name="title">
        Custom Title
    </x-slot>

    @foreach ($tasks as $task)
        {{ $task }}
    @endforeach
</x-layout>