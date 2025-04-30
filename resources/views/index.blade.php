@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ $poster->poster }}" class="w-64 md:w-96">
            <div class="md:ml-24 mt-2">
                <h2 class="text-4xl font-semibold">{{ $movie->title }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span>{{ $movie->release_date ?? 'Unknown Release Date' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $genres->implode(', ') }}</span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $movie->overview ?? 'No description available.' }}
                </p>
            </div>

            
        </div>
    </div>
    <div class="container mx-auto px-4 pt-16">
        <h2 class="uppercase tracking-wider text-yellow-300 text-lg font-semibold">Comments</h2>
    </div>

@endsection
