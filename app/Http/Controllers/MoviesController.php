<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    // For Testing
    public function getMovies50Json()
    {
        $movies = DB::table('movie_poster')->limit(50)->get();
        return response()->json($movies);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = DB::table('movie_poster')->limit(50)->get();
        return view('index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $poster = DB::table('movie_poster')->where('id', $id)->first();

        if (!$poster) {
            abort(404);
        }

        $movie = DB::table('movies')->where('tmdb_id', $poster->tmdb_id)->first();

        $movieId = $movie->id;

        $genres = DB::table('movie_genres')
            ->join('genres', 'movie_genres.genre_id', '=', 'genres.genre_id')
            ->where('movie_genres.movie_id', $movieId)
            ->pluck('genres.name');

        return view('show', [
            'poster' => $poster,
            'movie' => $movie,
            'genres' => $genres,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
