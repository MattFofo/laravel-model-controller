@extends('guest.templates.base')


@section('title', 'home')

@section('content')
    <h1>Home Page</h1>
    <div>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <h3>Titolo &#8594; {{ $movie->title }}</h3>
                    <h4>Titolo originale &#8594; {{ $movie->original_title }}</h4>
                    <h4>Nazionalità &#8594; {{ $movie->nationality }}</h4>
                    <h4>Data &#8594; {{ $movie->date }}</h4>
                    <h4>Voto &#8594; {{ $movie->vote }}</h4>
                </li>
            @endforeach

        </ul>
    </div>

@endsection
