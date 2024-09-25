@extends('layout.app')

@section('content')
<div>
    <div>
        <form action="{{ route('pokemon.search') }}" method="POST" id="searchForm">
            @csrf
            <input type="text" name="name" id="name" placeholder="Search for a Pokemon">
            <button type="submit">Search</button>
        </form>
    </div>
    <div>
        @if(count($pokemon) > 0)
            <h1>Pokemon</h1>
            <table id="pokemonTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Url</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pokemon as $poke)
                        <tr>
                            <td>
                                {{ $poke->getName() }}
                            </td>
                            <td>
                                <a href="{{ route('pokemon.show', $poke->getName()) }}">More Info</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1>No Pokemon</h1>
        @endif
    </div>
</div>
@endsection
