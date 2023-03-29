<div class="card">
    <div class="card-body text-center">
      <h5 class="card-title">{{ $movie->title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
      <p class="card-text">
        <span class="fw-semibold">
            Nationality:
        </span> 
        <span class="text-muted">
          {{ ucfirst($movie->nationality) }}
        </span>
      </p>
      <p class="card-text">
        <span class="fw-semibold">
            Release date:
        </span> 
        <span class="text-muted">
          {{ $movie->date }}
        </span>
      </p>
      <p class="card-text">
        <span class="fw-semibold">
            Vote:
        </span> 
        <span class="text-muted">
          {{ $movie->vote }}
        </span>
      </p>
      @if ((Request::url() === 'http://127.0.0.1:8000/movies'))
      <a href="{{ route('detail', ['index' => $movie->id]) }}" class="card-link">Movie detail</a>
      @endif
    </div>
</div>