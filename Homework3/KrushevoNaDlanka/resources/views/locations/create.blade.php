@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/locations" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description"
                               class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text"
                                   class="form-control @error('description') is-invalid @enderror" name="description"
                                   value="{{ old('description') }}" required autocomplete="description" autofocus>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                        <div class="col-md-6">
                            <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror"
                                   name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                            @error('rating')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image_1" class="col-md-4 col-form-label text-md-right">{{ __('Image 1') }}</label>

                        <div class="col-md-6">
                            <input id="image_1" type="text" class="form-control @error('image_1') is-invalid @enderror"
                                   name="image_1" value="{{ old('image_1') }}" required autocomplete="image_1"
                                   autofocus>

                            @error('image_1')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image_2" class="col-md-4 col-form-label text-md-right">{{ __('Image 2') }}</label>

                        <div class="col-md-6">
                            <input id="image_2" type="text" class="form-control @error('image_2') is-invalid @enderror"
                                   name="image_2" value="{{ old('image_2') }}" required autocomplete="image_2"
                                   autofocus>

                            @error('image_2')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image_3" class="col-md-4 col-form-label text-md-right">{{ __('Image 3') }}</label>

                        <div class="col-md-6">
                            <input id="image_3" type="text" class="form-control @error('image_3') is-invalid @enderror"
                                   name="image_3" value="{{ old('image_3') }}" required autocomplete="image_3"
                                   autofocus>

                            @error('image_3')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="x_coordinate"
                               class="col-md-4 col-form-label text-md-right">{{ __('X coordinate') }}</label>

                        <div class="col-md-6">
                            <input id="x_coordinate" type="text"
                                   class="form-control @error('x_coordinate') is-invalid @enderror" name="x_coordinate"
                                   value="{{ old('x_coordinate') }}" required autocomplete="x_coordinate" autofocus>

                            @error('x_coordinate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="y_coordinate"
                               class="col-md-4 col-form-label text-md-right">{{ __('Y coordinate') }}</label>

                        <div class="col-md-6">
                            <input id="y_coordinate" type="text"
                                   class="form-control @error('y_coordinate') is-invalid @enderror" name="y_coordinate"
                                   value="{{ old('y_coordinate') }}" required autocomplete="y_coordinate" autofocus>

                            @error('y_coordinate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="category_id"
                               class="col-md-4 col-form-label text-md-right">{{ __('Category_id') }}</label>

                        <div class="col-md-6">
                            <input id="category_id" type="text"
                                   class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                                   value="{{ old('category_id') }}" required autocomplete="category_id" autofocus>

                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn btn-primary">Add location</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
