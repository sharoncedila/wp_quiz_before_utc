<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function homepage(){
        $movies = Movie::all();
        // $movies = Movie::where('id', '1')->first();
        return view('homepage', ["movies" => $movies]);
    }    
}
