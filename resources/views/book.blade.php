@extends('layouts.main')
@section('content')
    <h1>Books</h1>
    <div class="justify-content-center row row-cols-1 row-cols-md-3  g-4">

        @foreach ($books as $book)
            <div class="col">
                <div class="card h-100 ">
                    <img src="/img/camera in person.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['title'] }}</h5>
                        @foreach ($book['authors'] as $author)
                            <h6 class="card-subtitle text-muted">{{ $author['name'] }}</h6>
                        @endforeach

                        <p class="card-text">{{ $book['body'] }}</p>
                    </div>
                    <div class="card-footer ">
                        <small class="card-subtitle  text-primary">{{ $book['release_date'] }}</small>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
