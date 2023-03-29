<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function index() {

        $movies = Movie::all();

        return view('movies', compact('movies'));
    }

    public function movieDetail($id) {

        $movie = Movie::findOrFail($id);

        return view('detail', compact('movie'));
    }
}