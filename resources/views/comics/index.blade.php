@extends('layout')

@section('content')
    <main class=" text-center my-5">
        <h1 class="py-2">
            DC Comics
        </h1>

        <ul>
            <ul class="list-unstyled">
                @foreach ($comics as $c)
                    <li>
                        <a href="{{ route('comics.show', $c->id) }}">
                            {{ $c->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </ul>

        <a href="{{ route('comics.create') }}">ADD Comics</a>
    </main>
@endsection
