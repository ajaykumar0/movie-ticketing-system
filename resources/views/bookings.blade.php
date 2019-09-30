@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(count($user->bookings))
            <!--  -->
                @foreach($user->bookings as $booking)
                    <div class="movie-card">
                        <div style="background-image: url({{ $booking->movie->url }})" class="movie-header movieHeaderImage">
                            <div class="header-icon-container">
                                
                            </div>
                        </div><!--movie-header-->
                        <div class="movie-content">
                            <div class="movie-content-header">
                                <a href="/movie/{{ $booking->movie->id }}/{{ $booking->movie->title }}">
                                    <h3 class="movie-title">{{ $booking->movie->title }}</h3>
                                </a>
                                <div class="imax-logo"></div>
                            </div>
                            <span style="font-size: x-small;"> {{ $booking->movie->language }} | {{ $booking->movie->genre }}</span>
                            <div class="movie-info">
                                <div class="info-section">
                                    <label>Release Dat</label>
                                    <span>{{ $booking->movie->releaseDate }}</span>
                                </div><!--date,time-->
                                <div class="info-section">
                                    <label>#Tickets</label>
                                    <span> {{ $booking->pivot->numberOfSeats }} </span>
                                </div><!--screen-->
                                <div class="info-section">
                                    <label>Cost</label>
                                    <span>{{ $booking->pivot->total }}</span>
                                </div><!--row-->
                            </div>
                            <hr>
                            <div class="movie-info">
                                <div class="info-section">
                                    <label>Theatre</label>
                                    <span>{{ $booking->screen->theatre->name }}</span>
                                </div><!--date,time-->
                                <div class="info-section">
                                    <label>Address</label>
                                    <span> {{ $booking->screen->theatre->address }} </span>
                                </div><!--screen-->
                                <div class="info-section">
                                    <label>Timing</label>
                                    <span>{{ $booking->showStartingTime }}</span>
                                </div><!--row-->
                            </div>
                        </div><!--movie-content-->
                    </div><!--movie-card-->
                @endforeach
            <!--  -->
            @else
                <br><br>
                <center>
                    <h3>Opps! No Bookings.</h3>
                </center>
            @endif
        </div>
    </div>
</div>
@endsection