<tr>
    <th scope="row">{{ $no }}</th>
    <td>{{ $nilai ?? "N/A"}}</td>
    <td>{{ isset($nilai) ? $rata : 'N/A' }}</td>
    <td>{{ isset($nilai) ? $rank : 'N/A' }} / {{ isset($nilai) ? $partisipan : 'N/A' }}</td>
    <td>
        @if( isset($nilai) )
        <progress class="progress progress-primary" value="{{ $progress }}" max="100"></progress> 
        <!-- <div class="progress mt-3" style="height: 5px">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%"></div>
        </div> -->
        @else
            Input nilai Anda terlebih dahulu!
        @endif
    </td>
    <td>
        @if(isset($nilai) )
        <a href="{{ route($route.'.edit', ["$route_arg" => session('user')->id ]) }}" class="btn btn-primary"> Edit nilai </a>
        @else
        <a href="{{ route($route.'.create')}}" class="btn btn-secondary"> Input nilai </a>
        @endif
    </td>
</tr>
