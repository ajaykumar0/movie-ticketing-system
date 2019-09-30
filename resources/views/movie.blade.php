@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--  -->
            <div class="movie-card-full">
                <div style="background-image: url({{ $movie->url }})" class="movie-header movieHeaderImage">
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
                            <label>Duration</label>
                            <span>{{ $movie->durationInMinutes }} minutes</span>
                        </div><!--row-->
                    </div>

                    <div class="container margin-top">
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Theatre</label>
                            </div>
                            <div class="col-md-2">
                                <label>| Date</label><br>
                                <select id="dateFilter" name='date'>
                                    <option value=""></option>
                                    @if(count($dates))
                                        @foreach($dates as $date)
                                            <option value="{{ $date }}" {{ ($date == $getDate)? "selected": "" }}>{{ $date }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>| Shows</label>
                            </div>
                        </div><hr>

                        <!--  -->
                        <div class="tab-content" id="nav-tabContent">
                        @if($theatres && count($theatres))
                            @foreach($theatres as $key => $theatre)
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>{{ $theatre['theatre']->name }}</label>
                                    </div>
                                    <div class="col-md-2">
                                        <label> {{ $theatre['date'] }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        @if(count($theatre['shows'])) 
                                            @foreach($theatre['shows'] as $show)
                                            <a href="/show/{{$show->pivot->id}}/book">
                                                <button style="margin-top: 4px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$key}}-{{$show->id}}">{{ explode(':', explode(' ', $show->pivot->showStartingTime)[1] )[0] }}:{{ explode(':', explode(' ', $show->pivot->showStartingTime)[1] )[1] }} - {{ explode(':', explode(' ', $show->pivot->showEndingTime)[1] )[0] }}:{{ explode(':', explode(' ', $show->pivot->showEndingTime)[1] )[1] }}</button>
                                            </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div><hr>
                            @endforeach
                        @endif
                        </div>
                        <!--  -->
                    </div>

                </div><!--movie-content-->
            </div><!--movie-card-->
            <!--  -->
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        var movieId = "{{ $movie->id }}";
        var movieTitle = "{{ $movie->title }}";
        $("#dateFilter").change(function() {
            window.location = '/movie/'+movieId+'/'+movieTitle+'?date='+$('option:selected', this).text();
        });
    });
</script>
@endsection
