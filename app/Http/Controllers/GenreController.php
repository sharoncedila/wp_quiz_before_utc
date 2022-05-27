<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    //
    public function show_genre($id){
        $movies = Movie::where('genre_id', $id)->get();
        $genres = Genre::where('id', $id)->first();
        return view('/genrepage', ["movies" => $movies, "genres" => $genres]);
    }
}
