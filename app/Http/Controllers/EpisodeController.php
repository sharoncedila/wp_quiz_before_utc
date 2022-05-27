<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    //

    public function moviedetail($id){
        // $movie = Movie::find($id);
        $movies = Movie::where('id', $id)->first();
        $episodes = Episode::where('movie_id', $id)->paginate(3);
        // $movies = Movie::where('id', '1')->first();
        return view('moviedetailpage', ["movies" => $movies, "episodes" => $episodes]);
    }    
}
