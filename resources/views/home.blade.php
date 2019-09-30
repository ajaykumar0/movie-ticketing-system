@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($movies))
            <!--  -->
                @foreach($movies as $movie)
                    <div class="movie-card">
                        <div style="background-image: url({{ $movie->url }})" id="movie-{{$movie->id}}-image-header" class="movie-header movieHeaderImage">
                            <div class="header-icon-container">
                                
                            </div>
                        </div><!--movie-header-->
                        <div class="movie-content">
                            <div class="movie-content-header">
                                <a href="/movie/{{ $movie->id }}/{{ $movie->title }}">
                                    <h3 class="movie-title">{{ $movie->title }}</h3>
                                </a>
                                <div class="imax-logo"></div>
                            </div>
                            <span style="font-size: x-small;"> {{ $movie->language }} | {{ $movie->genre }}</span>
                            <div class="movie-info">
                                <div class="info-section">
                                    <label>Release Dat</label>
                                    <span>{{ $movie->releaseDate }}</span>
                                </div><!--date,time-->
                                <div class="info-section">
                                    <label>Shows</label>
                                    <span> {{ ($movie->shows)? count($movie->shows): 0 }} </span>
                                </div><!--screen-->
                                <div class="info-section">
                                    <label>Duration</label>
                                    <span>{{ $movie->durationInMinutes }} minutes</span>
                                </div><!--row-->
                            </div>
                        </div><!--movie-content-->
                    </div><!--movie-card-->
                @endforeach
            <!--  -->
            @endif
        </div>
    </div>
</div>
@endsection
