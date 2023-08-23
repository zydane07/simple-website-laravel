@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-md-7 bg-primary d-none d-md-block bg-login">
        </div>
        <div class="col-sm-12 col-md-5 align-items-center d-flex justify-content-center" style="height: 100vh;">
            <div>
                @if (Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <h1 class="text-center text-primary text-uppercase">Selamat Datang</h1>
                {{-- login page --}}
                <form method="POST" action="/login">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">

                        @error('email')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        @error('message')
                            <div class="alert alert-danger mt-2" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="/register">Register</a>
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <div class="d-grid">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
