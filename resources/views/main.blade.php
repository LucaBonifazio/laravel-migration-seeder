@extends('guest.layouts.base')

@section('content')
    <div>
        {{$table[0]['agency']}}
    </div>
    <div>
        {{$table[0]['departure_station']}}
    </div>
    <div>
        {{$table[0]['arrival_station']}}
    </div>
    <div>
        {{$table[0]['departure_time']}}
    </div>
@endsection
