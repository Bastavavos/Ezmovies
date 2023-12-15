<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function showList(): View {

        $movies = Movie::all();
//        dd($movies);
        return view('movies-list', [
            'movies'=>$movies
        ]);
    }

    public function showMovie($id) {
        return view('movie-details', ['id' => $id]);
    }
}
