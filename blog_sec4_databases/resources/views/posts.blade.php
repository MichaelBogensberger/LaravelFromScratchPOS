<x-layout>
    <x-slot name="content">
        @foreach($posts as $post) 

            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> Category: <a href="/categories/{{ $post->category->id }}">{{$post->category->name}}</a>

                <div>
                    <p>
                        {{ $post->excerpt }}    
                    </p>
                </div>
            </article>

        @endforeach

        
    </x-slot>
</x-layout>