@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin panel</h1>
        <a href="{{url('locations/create')}}">
            <div class="p-3">
                <h3> Create location</h3>
            </div>
        </a>

        <a href="{{url('categories/create')}}">
            <div class="p-3">
                <h3> Create category</h3>
            </div>
        </a>


    </div>
@endsection
