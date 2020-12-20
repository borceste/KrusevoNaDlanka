@extends('layouts.app')

@section('content')

    <div class="container">

        <div role="tabpanel">
            <ul class="nav nav-tabs" role="tablist">
                @foreach ($category as $item)
                    <li role="presentation" class="{{ $item->id == 1 ? 'active' : '' }} nav-link">
                        <a href="#home{{ $item->id }}" aria-controls="home" role="tab"
                           data-toggle="tab">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach ($category as $item)
                    <div role="tabpanel" class="tab-pane {{ $item->id == 1 ? 'active' : '' }}" id="home{{ $item->id }}"
                         class="active">
                        <div>
                            @foreach ($item->locations as $element)
                                <a href="{{url('locations/'.$element->id)}}">
                                    <div class="d-flex p-3">
                                        <div class="pl-1">
                                            <img src="{{$element -> image_1}}" width="200px">
                                        </div>
                                        <div class="p-3">
                                            <div>
                                                <h2>
                                                    {{ $element -> name}}
                                                </h2>
                                            </div>
                                            <div>
                                                {{$element -> description}}
                                            </div>
                                        </div>
                                    </div>
                                </a>


                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
