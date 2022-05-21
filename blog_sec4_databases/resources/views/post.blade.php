<x-layout>
    <x-slot name="content">

        <article>
            <h1>
                {{ $post->title }}
            </h1>
            By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> Category: <a href="/categories/{{ $post->category->id }}">{{$post->category->name}}</a>
            <div>
                {!! $post->body !!}
            </div>

        </article>


        <h1><a href="/">go back</a></h1>

    </x-slot>
</x-layout>