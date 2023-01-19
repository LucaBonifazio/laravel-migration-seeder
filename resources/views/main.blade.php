@extends('guest.layouts.base')

@section('content')
<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2 p-5">
    @foreach ($trains as $train)
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <div class="card-text">Company: {{$train['company']}}</div>
                <div class="card-text">Departure station:{{$train['departure_station']}}</div>
                <div class="card-text">Arrival station:{{$train['arrival_station']}}</div>
                <div class="card-text"> Departure time: {{$train['departure_time']}}</div>
                <div class="card-text">Arrival time: {{$train['arrival_time']}}</div>
                <div class="card-text">Code: {{$train['code']}}</div>
                <div class="card-text">Carriages: {{$train['n_carriages']}}</div>
                <div class="card-text">On time: {{$train['on_time']}}</div>
                <div class="card-text">Deleted: {{$train['deleted']}}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
