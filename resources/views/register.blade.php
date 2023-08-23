@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-7 bg-primary d-none d-md-block bg-login">
        </div>
        <div class="col-sm-12 col-md-5 align-items-center d-flex justify-content-center" style="height: 100vh;">
            <div>
                <h1 class="text-center text-primary text-uppercase">Mari Bergabung</h1>
                {{-- login page --}}
                <form method="POST" action="/register">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            aria-describedby="emailHelp">
                        @error('email')
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
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="nameHelp">
                        @error('name')
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

                    </div>
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
