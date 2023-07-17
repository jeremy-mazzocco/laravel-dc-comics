@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            NEW COMICS
        </h1>
        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <div>
                <label for="title">Title</label>
            </div>
            <div>
                <input type="text" name="title">
            </div>

            <div>
                <label for="description">Description</label>
            </div>
            <div>
                <input type="text" name="description">
            </div>

            <div>
                <label for="thumb">Thumb</label>
            </div>
            <div>
                <input type="text" name="thumb">
            </div>

            <div>
                <label for="price">Price</label>
            </div>
            <div>
                <input type="text" name="price">
            </div>

            <div>
                <label for="series">Series</label>
            </div>
            <div>
                <input type="text" name="series">
            </div>

            <div>
                <label for="sale_date">Sale_date</label>
            </div>
            <div>
                <input type="text" name="sale_date">
            </div>

            <div>
                <label for="type">Type</label>
            </div>
            <div>
                <input type="text" name="type">
            </div>

            <div>
                <label for="artists">Artists</label>
            </div>
            <div>
                <input type="text" name="artists">
            </div>

            <div>
                <label for="writers">Writers</label>
            </div>
            <div>
                <input type="text" name="writers">
            </div>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
