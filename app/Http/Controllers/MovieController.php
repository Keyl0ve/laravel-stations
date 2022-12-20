<?php

namespace App\Http\Controllers;
use App\Models\Movie;

class MovieController extends Controller
{
    public function sample()
    {
        return view('practice');
    }

    public function sample2()
    {
        $test = 'practice2';
        return view('practice2', ['testParam' => $test]);
    }

    public function sample3()
    {
        $test = 'test';
        return view('practice3', ['testParam' => $test]);
    }
    public function getMovie()
    {
        $movies = Movie::all();
        return response()->view('getMovie', ['movies' => $movies]);
    }
}