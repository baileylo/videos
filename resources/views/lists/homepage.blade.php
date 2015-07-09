@extends('layouts.default')

@section('pageTitle', 'Videos')

@section('content')

    @foreach (array_chunk($videos->all(), 4) as $videoList)
        <div class="row">
            @foreach ($videoList as $video)
                <div class="col-sm-3 text-center">
                    <img src="{{ $video->image }}" width="128" height="128" />
                    <h5>{{ $video->title }}</h5>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-offset-10">
            {!! $videos->render() !!}
        </div>
    </div>
@endsection
