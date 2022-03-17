<x-layout>
    @foreach($posts as $post)
    <article>
        {{$post}}
        <h1>

        </h1>
        <div style="background-color:lightblue";>
            <a href="/categories/{{$post->category->slug}}">
        {{$post->category->name}}
            </a>
        </div>
        <div>
            {!!$post->excerpt!! }
        </div>
    </article>
    @endforeach
</x-layout>
