<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="mt-10">
            @csrf
            <div class="mt-3">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="name">{{ __('Titre du post') }}</label>
                <input
                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    id="name" name="name"/>
            </div>
            <div class="mt-3 relative inline-block w-full text-gray-700">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="category">{{ __('Category du post') }}</label>
                <select name="category" id="category"
                        class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="image">{{ __('Image du post') }}</label>
                <input
                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    type="file" id="image" name="image"/>
            </div>
            <div class="mt-3">
                <label class="text-gray-700 select-none font-medium text-xl mb-2"
                       for="content">{{ __('Contenu du post') }}</label>
                <textarea
                    class="w-full px-3 py-2 h-40 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                    id="content" name="content"></textarea>
            </div>

            <button type="submit"
                    class="mt-3 cursor-pointer bg-gray-700 hover:bg-gray-600 shadow-xl px-5 py-2 inline-block text-blue-100 hover:text-white rounded">
                {{ __('Crée mon post') }}
            </button>
        </form>
    </div>
</x-app-layout>
