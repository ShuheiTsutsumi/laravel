{{-- <?php
    // var_dump($posts);
    // exit;
    dd($posts);
?> --}}
<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>

    <h1>
        <span> My BBS </span>
        <a href ="{{route('posts.create')}}">[Add]</a>
    </h1>
    {{-- <ul> --}}
        {{-- <li><?php echo htmlspecialchars($posts[0], ENT_QUOTES, 'UTF-8'); ?> --}}
        {{-- <li>{{ $posts[0] }}</li>
        <li>{{ $posts[1] }}</li>
        <li>{{ $posts[2] }}</li> --}}
    {{-- </ul> --}}
    <ul>
        {{-- @foreach ($posts as $post)
            <li> {{ $post }}</li>
        @endforeach --}}

        {{-- @forelse ($posts as $index => $post) --}}
        @forelse ($posts as $post)
           <li>
                <a href="{{ route('posts.show', $post) }}">
                     {{ $post->title }}
                </a>
           </li>
        @empty
            <li> No posts yet!</li>
        @endforelse
    </ul>
</x-layout>
