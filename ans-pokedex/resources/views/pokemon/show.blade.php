@extends('layout.app')

@section('content')
    <a href="{{ route('pokemon.index') }}">All Pokemon</a>
    
    <h1>{{ $pokemon->getName() }}</h1>

    <img src="{{ $pokemon->getImage() }}" alt="image of a pokemon" title="{{ $pokemon->getName() }}" />

    <h3>Info</h3>
    <ul>
        <li>
            <strong>Height:</strong> {{ $pokemon->getHeight() }}
        </li>
        <li>
            <strong>Weight:</strong> {{ $pokemon->getWeight() }}
        </li>
        <li>
            <strong>Type:</strong> {{ $pokemon->getType() }}
        </li>
    </ul>

    <h3>Abilities</h3>
    @if (count($pokemon->getAbilities()) > 0)
        <ul>
            @foreach($pokemon->getAbilities() as $ability)
                <li>{{ $ability->getName() }}</li>
            @endforeach
        </ul>
    @endif
@endsection
