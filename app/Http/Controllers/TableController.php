<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Rating;
use App\Http\Resources\RatingResource;
use App\Http\Resources\RatWithMovieResource;

class TableController extends Controller
{
    public function experimentFiled(Request $request){
        #$userid = $request->input('userid');
        $userid = 5;
        $movies = Rating::where('user_id', 5)->get();

        #foreach($movies as $movie){
        #    $movie_id = $movie->movieId;
        #    $rating = $movie->rating;
        #    $user_id = $movie->userId;
        #}
    }

    public function selectMovieByIdWithResource(Request $request){
        $userid = 5;
        $movies = Rating::where('user_id', 5)->get();
        return RatingResource::collection($movies);
    }

    public function selectMovieByIdwithRelation(Request $request){
        $userid = $request->input('user_id');
        #$userid = 5;
        $movietitle = Rating::with(['movie'])->where('user_id', $userid)->get();
        return RatWithMovieResource::collection($movietitle);
    }

    public function RenderExample(String $name){
        $filename = 'doraemon.jpg';
        return view('hello', ['name' => $name ,'filename'=>$filename]);
    }
}
