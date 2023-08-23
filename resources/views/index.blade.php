@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <article class="mb-4 border border-dark p-4 rounded">
            <a href="/index/{{ $post['id'] }}">
                <h2 class="text-primary">{{ $post['judul'] }}</h2>
            </a>
            <h5>{{ $post['penulis'] }}</h5>
            <p>{{ $post['text'] }}</p>
        </article>
    @endforeach
@endsection
