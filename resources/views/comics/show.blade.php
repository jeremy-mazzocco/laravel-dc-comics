@extends('layout.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            {{ $comics->title }}
        </h1>
        <img src="{{ $comics->thumb }}" class="w-50 h-50">
        <div class="row d-flex">
            <div class="col-4">
                Series: {{ $comics->series }}
            </div>
            <div class="col-4">
                Sale Date: {{ $comics->sale_date }}
            </div>
            <div class="col-4">
                Price: {{ $comics->price }}
            </div>
        </div>
        <div>
            Description: {{ $comics->description }}
        </div>
        <div class="row">
            <div class="col-4">
                Artists: {{ $comics->artists }}
            </div>
            <div class="col-4">
                Writers: {{ $comics->writers }}
            </div>
            <div class="col-4">
                Type: {{ $comics->type }}
            </div>
        </div>
        <a href="{{ route('comics.edit', $comics->id) }}">
            EDIT
        </a>
        <form action="{{ route('comics.destroy', $comics->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input class="mx-3" type="submit" value="DELETE">
        </form>
    </div>
@endsection
