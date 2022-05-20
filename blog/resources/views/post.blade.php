<x-layout>
    <x-slot name="content">

        <article>
            <h1>
                {{ $post->title }}
            </h1>
            <div>
                {!! $post->body !!}

            </div>

        </article>


        <h1><a href="/">go back</a></h1>

    </x-slot>
</x-layout>