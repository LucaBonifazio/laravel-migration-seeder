@extends('guest.layouts.base')

@section('content')
    @foreach ($trains as $train)
    <div>
        {{$train['company']}} <br>
        {{$train['departure_station']}} <br>
        {{$train['arrival_station']}} <br>
        {{$train['departure_time']}} <br>
        {{$train['arrival_time']}} <br>
        {{$train['code']}} <br>
        {{$train['n_carriages']}} <br>
        {{$train['on_time']}} <br>
        {{$train['deleted']}}
    </div>
    <br>
    @endforeach
@endsection
