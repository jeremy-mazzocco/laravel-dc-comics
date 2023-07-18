@extends('layout.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            EDIT COMIC
        </h1>
        <form action="{{ route('update', $comics->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $comics->title }}">
            </div>

            <div>
                <label for="title">Imagine</label>
                <input type="text" name="title" id="title" value="{{ $comics->title }}">
            </div>

            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" value="{{ $comics->series }}">
            </div>

            <div>
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comics->sale_date }}">
            </div>

            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="{{ $comics->price }}">
            </div>

            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="{{ $comics->description }}">
            </div>

            <div>
                <label for="type">Type</label>
                <input type="text" name="type" id="type" value="{{ $comics->type }}">
            </div>

            <div>
                <label for="artists">Artists</label>
                <input type="text" name="artists" id="artists" value="{{ $comics->artists }}">
            </div>

            <div>
                <label for="writers">Writers</label>
                <input type="text" name="writers" id="writers" value="{{ $comics->writers }}">
            </div>

            <input class="my-3" type="submit" value="UPDATE">
        </form>

    </div>
@endsection
