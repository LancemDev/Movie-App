@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            @if ($movie['poster_path'])
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="w-96">
            @else
                <img src="https://via.placeholder.com/300x450" alt="poster" class="w-96">
            @endif
        </div>
    </div>

@endsection