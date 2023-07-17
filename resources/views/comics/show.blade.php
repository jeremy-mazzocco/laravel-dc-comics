@extends('layout.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            {{ $comics->title }}
        </h1>
        <img src="{{ $comics->thumb }}" alt="">
        <div class="row d-flex">
            <div class="col-4">
                {{ $comics->series }}
            </div>
            <div class="col-4">
                {{ $comics->sale_date }}
            </div>
            <div class="col-4">
                {{ $comics->price }}
            </div>
        </div>
        <div>
            {{ $comics->description }}
        </div>

    </div>
@endsection
