<div class="overflow-auto">
    <div class="card shadow p-4 " style="min-width: 500px">
        <h1>{{ $judul }}</h1>
        @if($tipe == 'Create')
            <form action="{{ route($route) }}" method="POST">
        @else
            <form action="{{ route($route, $user) }}" method="POST">
        @endif
            @csrf
            {{ $slot }}
            <a class="btn btn-warning mt-2 " href="{{ route('home') }}">Kembali</a>
            <button type="submit" class="btn btn-primary mt-2 ms-2">{{$tipe}}</button>
        </form>
    </div>
</div>
