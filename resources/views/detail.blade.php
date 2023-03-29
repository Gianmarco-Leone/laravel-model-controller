@extends('layouts.app')

@section('title', 'Detail')

@section('content')
<section>
    <div class="container mb-4">
        <h1>Movie</h1>
        <div class="row justify-content-center">
            <div class="col-3">
                @include('partials._movie_card')
            </div>
        </div>

        <div class="text-center my-5">
            <a href="{{ route('movies') }}" class="btn btn-dark">Back to the list
            </a>
        </div>
    </div>
</section>
@endsection