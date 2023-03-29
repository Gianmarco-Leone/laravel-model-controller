@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<section>
    <div class="container mb-4">
        <h1 class="my-5">Movies</h1>
        <div class="row g-3">
            @forelse($movies as $movie)
            <div class="col-3">
                @include('partials._movie_card')
            </div>
            @empty
            <div class="col-12">
                <h2>No Movie</h2>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection