@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1>
    Contenuto 
</h1>

<div>
    @dump($movies)
</div>
@endsection