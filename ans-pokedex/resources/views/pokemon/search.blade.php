<tr>
    <td>{{ $pokemon->getName() }}</td>
    <td>
        <a href="{{ route('pokemon.show', $pokemon->getName()) }}">More Info</a>
    </td>
</tr>
