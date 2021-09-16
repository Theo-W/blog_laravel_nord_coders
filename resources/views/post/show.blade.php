<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-10">
            <h1 class="text-2xl mt-6">{{ $post->name }}</h1>
        </div>

        <img class="mt-10" src="{{ asset('/storage/' . $post->image ) }}" alt="">

        <div class="py-10 text-lg">
            <p>{{  $post->content }}</p>
        </div>
    </div>
</x-app-layout>
