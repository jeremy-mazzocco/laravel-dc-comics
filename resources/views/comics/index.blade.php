@extends('layout.main-layout')

@section('content')
    <h1>
        DC Comics
    </h1>

    <ul>
        <ul class="list-unstyled">
            @foreach ($comics as $c)
                <li>
                    {{ $c->title }}
                </li>
            @endforeach
        </ul>
    </ul>
@endsection
