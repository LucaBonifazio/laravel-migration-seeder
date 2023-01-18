@extends('guest.layouts.base')

@section('content')
<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2 p-5">
    @foreach ($trains as $train)
    <div class="col">
        <div class="card h-100">
            <div class="card-body">
                <div class="card-text">{{$train['company']}}</div>
                <div class="card-text">{{$train['departure_station']}}</div>
                <div class="card-text">{{$train['arrival_station']}}</div>
                <div class="card-text">{{$train['departure_time']}}</div>
                <div class="card-text">{{$train['arrival_time']}}</div>
                <div class="card-text">{{$train['code']}}</div>
                <div class="card-text">{{$train['n_carriages']}}</div>
                <div class="card-text">{{$train['on_time']}}</div>
                <div class="card-text">{{$train['deleted']}}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
