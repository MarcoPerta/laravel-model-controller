@extends('layouts.app')

@section('title-page', 'Movies')

@section('main-content')

    <h4>All Movies</h4>
    @foreach ($allMovies  as $elem )
        <h2>{{$elem->title}}</h2>
    @endforeach

    <div class="section">
        <div class="container py-5">

            <div class="d-flex flex-wrap">

                @foreach ($allMovies  as $elem )

                    <div class="card-container d-flex flex-column">
                        <h4 class="card-text text-white mb-4">{{ $elem->title }}</h4>
                        <h4 class="card-text text-white mb-4">{{ $elem->original_title }}</h4>
                        <h4 class="card-text text-white mb-4">{{ $elem->nationality }}</h4>
                        <h4 class="card-text text-white mb-4">{{ $elem->date }}</h4>
                        <h4 class="card-text text-white mb-4">{{ $elem->voteh4 }}</h4>
                    </div>
                @endforeach

            </div>
        </div>    
    </div>


@endsection