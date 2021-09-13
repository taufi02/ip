<tr>
    <th scope="row">{{ $no }}</th>
    <td>{{ $nilai ?? "N/A"}}</td>
    <td>{{ isset($nilai) ? $rata : 'N/A' }}</td>
    <td>{{ isset($nilai) ? $rank : 'N/A' }} / {{ isset($nilai) ? $partisipan : 'N/A' }}</td>
    <td>
        @if( isset($nilai) )
        <progress class="progress progress-primary" value="{{ $progress }}" max="100"></progress>
        @else
            Input nilaimu terlebih dahulu!
        @endif
    </td>
    <td>
        @if(isset($nilai) )
        <a href="{{ url($route) }}" class="btn btn-primary"> Edit nilai </a>
        @else
        <a href="{{ url($route) }}" class="btn btn-secondary"> Input nilai </a>
        @endif
    </td>
</tr>
