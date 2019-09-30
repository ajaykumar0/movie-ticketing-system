@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Booking') }} {{ $show->movie->title }}</div>

                <div class="card-body">
                    <form method="POST" action="/show/{{ $show->id }}/confirm">
                        @csrf

                        <div class="form-group row">
                            <input type="hidden" name="id" value="{{$show->id}}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Seats') }}</label>
                            <div class="col-md-6">
                                <input id="seats" type="number" class="form-control @error('seats') is-invalid @enderror" name="seats" value="{{ old('seats') }}" required autocomplete="seats" autofocus>
                                @error('seats')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book Now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
