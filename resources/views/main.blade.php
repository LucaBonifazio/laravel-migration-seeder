@extends('guest.layouts.base')

@section('content')
    <div>
        {{$trains[0]['agency']}}
    </div>
    <div>
        {{$trains[0]['departure_station']}}
    </div>
    <div>
        {{$trains[0]['arrival_station']}}
    </div>
    <div>
        {{$trains[0]['departure_time']}}
    </div>
@endsection
