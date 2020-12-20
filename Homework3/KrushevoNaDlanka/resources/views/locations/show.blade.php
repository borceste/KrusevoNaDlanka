@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="info" class="row">
            <div class="col-sm">
                <div>
                    <h2>{{$location -> name}}</h2>
                </div>
                <div class="col-md-4 p-2">{{$location -> description}}</div>
            </div>
            <div class="col-md-4 pt-5">
                <div class="p-1">
                    <img src="{{$location -> image_1}}" width="300px">
                </div>
                <div class="p-1">
                    <img src="{{$location -> image_2}}" width="300px">
                </div>
                <div class="p-1">
                    <img src="{{$location -> image_3}}" width="300px">
                </div>
            </div>
        </div>
        <hr>
        <div id="navigate"></div>
        <hr>
        <div id="reviews">
            <div class="p-1">
                <h3>Reviews</h3>
            </div>

            @foreach ($location->reviews as $review)
                <div class="p-4">
                    <div>
                        @foreach (App\Models\User::all() as $user)
                            @if ($user->id == $review->user_id)
                                <strong>{{$user->name}}</strong> rated this location with {{$review->rating}} out of 5.0.
                            @endif
                        @endforeach

                    </div>
                    <div>
                        {{$review->body}}
                    </div>
                </div>

            @endforeach


        </div>
        <hr>
        <div id="write-review">
            <div class="p-1">
                <h4>Add review</h4>
            </div>
            <form action="/reviews" method="post">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label ">{{ __('Rating') }}</label>

                            <div class="col-md-6">
                                <input id="rating" type="text"
                                       class="form-control @error('rating') is-invalid @enderror"
                                       name="rating" value="{{ old('rating') }}" required autocomplete="rating"
                                       autofocus>

                                @error('rating')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label ">{{ __('Body') }}</label>

                            <div class="col-md-6">
                                <input id="body" type="text" class="form-control @error('body') is-invalid @enderror"
                                       name="body" value="{{ old('body') }}" required autocomplete="body" autofocus>

                                @error('body')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <input type="hidden" name="location_id" value="{{$location -> id}}">

                        <div class="row">
                            <button class="btn btn-primary">Add review</button>
                        </div>


                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
