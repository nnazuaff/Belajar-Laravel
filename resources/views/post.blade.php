<x-layout :title="$title">

    <article class="py-8 max-w-3xl">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> | 1 Mei 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts/" class="font-medium text-blue-500 hover:underline">&laquo; Back to all
            posts</a>
    </article>

</x-layout>
