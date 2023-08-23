@extends('layouts.main')
@section('content')
    <article>
        <h2>{{ $post['judul'] }}</h2>
        <h5>{{ $post['penulis'] }}</h5>
        <p>{{ $post['text'] }}</p>
    </article>
    <a href="/">Kembali ke Homepage</a>
@endsection
