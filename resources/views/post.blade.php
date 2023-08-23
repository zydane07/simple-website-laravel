@extends('layouts.main')

@section('content')
    <h1>Post</h1>
    <div class="justify-content-center row row-cols-1 row-cols-md-2 g-2">
        @foreach ($posts as $post)
            <div class="col">
                <div class="align-items-center border d-flex rounded p-2 h-100">
                    <div class="flex-shrink-0">
                        <img src="/img/camera in person.jpg" alt="..." class="img-fluid" style="height: 150px">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h2>{{ $post['title'] }}</h2>
                        @if ($post['user'])
                            <h5>{{ $post['user']['name'] }}</h5>
                        @endif
                        <p>{{ $post['body'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <p>{{ $user['address']['street'] }}</p>
@endsection
