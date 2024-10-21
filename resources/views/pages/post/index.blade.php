<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <article>
            <h2 class="text-2xl text-gray-700 font-bold">{{ $post['title'] }}</h2>
            <h5 class="text-sm text-gray-500">{{ $post['penulis'] }}</h5>
            <p class="my-4">{{ Str::limit($post['konten'], 50) }} <a href="post/{{ Str::slug($post['title'], '-') }}" class="hover:underline">Read more &raquo;</a><p>
        </article>
    @endforeach
</x-layout>