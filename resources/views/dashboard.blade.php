<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">{{ __('Title') }}</th>
                        <th class="text-left p-3 px-5">{{__('Category')}}</th>
                        <th class="text-left p-3 px-5">{{ __('Creation') }}</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                        <td class="p-3 px-5">{{ $post->name }}</td>
                        <td class="p-3 px-5">{{ $post->category->name }}</td>
                        <td class="p-3 px-5">{{ $post->created_at->format('d M Y') }}</td>
                        <td class="p-3 px-5 flex justify-end">
                            <a href="{{ route('posts.edit', $post) }}"
                                    class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-2 px-8 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Edit') }}
                            </a>
                            <a href="#"
                                    class="text-sm bg-red-500 hover:bg-red-700 text-white py-2 px-8 rounded focus:outline-none focus:shadow-outline"
                               onclick="event.preventDefault();
                               document.getElementById('destroy-post-from').submit();
                                "
                            >
                                {{ __('Delete') }}
                                <form action="{{ route('posts.destroy', $posts) }}" method="post" id="destroy-post-from">
                                    @csrf
                                    @method('delete')
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
