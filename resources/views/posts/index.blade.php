@extends('layouts.app')

@section( 'content' )

<h1>Blogok</h1>
<a href="/blog/create/post">Új bejegyzés</a>

@forelse($posts as $post)
<ul>
    <li><a href="./blog/{{ $post->id }}">
            {{ ucfirst($post->title) }}
        </a>

    </li>
</ul>
@empty
<h4>Nincs bejegyzés</h4>
@endforelse

@endsection