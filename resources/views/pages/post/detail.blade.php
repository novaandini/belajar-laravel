<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article>
        <h2 class="text-2xl text-gray-700 font-bold">{{ $post['title'] }}</h2>
        <h5 class="text-sm text-gray-500">{{ $post['penulis'] }}</h5>
        <p class="my-4">{{ $post['konten'] }}
        <p>
            <a href="/post" class="hover:underline">&laquo; Back to Blog</a>
    </article>
</x-layout>
