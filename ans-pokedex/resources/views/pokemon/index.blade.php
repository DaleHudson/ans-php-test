<div>
    <div>
        <form action="{{ route('pokemon.search') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Search for a Pokemon">
            <button type="submit">Search</button>
        </form>
    </div>
    <div>
        @if(count($pokemon) > 0)
            <h1>Pokemon</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Url</th>
                </tr>
                @foreach($pokemon as $poke)
                    <tr>
                        <td>
                            {{ $poke->getName() }}
                        </td>
                        <td>
                            <a href="{{ $poke->getUrl() }}">More Info</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <h1>No Pokemon</h1>
        @endif
    </div>
</div>
