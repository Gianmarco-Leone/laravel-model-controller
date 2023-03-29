@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    <div class="container">
        <h1 class="my-5">Movies</h1>
        <div class="row g-3">
            @forelse($movies as $movie)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                      <p class="card-text">
                        <span class="fw-semibold">
                            Nationality:
                        </span> 
                        {{ $movie->nationality }}</p>
                      <p class="card-text">
                        <span class="fw-semibold">
                            Release date:
                        </span> 
                        {{ $movie->date }}</p>
                      <p class="card-text">
                        <span class="fw-semibold">
                            Vote:
                        </span> 
                        {{ $movie->vote }}</p>
                      <a href="#" class="card-link">Movie detail</a>
                    </div>
                  </div>
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