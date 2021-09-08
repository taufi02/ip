@extends('layout.index')
@section('content')
<div class="flex justify-content-center pt-5 mx-auto">
    <div class="card p-3 shadow">
        <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bold">
                Nama : {{ session("user")->name}}
            </li>
            <li class="list-group-item fw-bold">
                Email : {{ session('user')->email}}
            </li>
            <li class="list-group-item fw-bold">
                NIM : {{ session('user')->npm}}
            </li>
        </ul>
    </div>
    <div class="card mt-5 p-3 shadow overflow-auto">
        @if (session()->has('pesan_isi'))
          <div class="alert alert-{{ session()->get('pesan_tipe') }} alert-dismissible fade show" role="alert">
              {{ session()->get('pesan_isi') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">IP / Nilai SKD</th>
                <th scope="col">Rata-rata angkatan</th>
                <th scope="col">Peringkat</th>
                <th scope="col" style="max-width: 200px" class="text-center">Partisipan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              <x-semester
                no="Semester 1"
                route="nilai-sem-satu"
                :nilai="$nilai_sem_satu"
                :rata="isset($nilai_sem_satu) ? $rata_sem_satu : null"
                :rank="isset($nilai_sem_satu) ? $rank_sem_satu : null"
                :partisipan="isset($nilai_sem_satu) ? $partisipan_sem_satu : null"
              ></x-semester>
              <x-semester
                no="Semester 2"
                route="nilai-sem-dua"
                :nilai="$nilai_sem_dua"
                :rata="isset($nilai_sem_dua) ? $rata_sem_dua : null"
                :rank="isset($nilai_sem_dua) ? $rank_sem_dua : null"
                :partisipan="isset($nilai_sem_dua) ? $partisipan_sem_dua : null"
              ></x-semester>
              <x-semester
                no="Semester 3"
                route="nilai-sem-tiga"
                :nilai="$nilai_sem_tiga"
                :rata="isset($nilai_sem_tiga) ? $rata_sem_tiga : null"
                :rank="isset($nilai_sem_tiga) ? $rank_sem_tiga : null"
                :partisipan="isset($nilai_sem_tiga) ? $partisipan_sem_tiga : null"
              ></x-semester>
              <x-semester
                no="Semester 4"
                route="nilai-sem-empat"
                :nilai="$nilai_sem_empat"
                :rata="isset($nilai_sem_empat) ? $rata_sem_empat : null"
                :rank="isset($nilai_sem_empat) ? $rank_sem_empat : null"
                :partisipan="isset($nilai_sem_empat) ? $partisipan_sem_empat : null"
              ></x-semester>
              <x-semester
                no="Semester 5"
                route="nilai-sem-lima"
                :nilai="$nilai_sem_lima"
                :rata="isset($nilai_sem_lima) ? $rata_sem_lima : null"
                :rank="isset($nilai_sem_lima) ? $rank_sem_lima : null"
                :partisipan="isset($nilai_sem_lima) ? $partisipan_sem_lima : null"
              ></x-semester>
              <x-semester
                no="Semester 6"
                route="nilai-sem-enam"
                :nilai="$nilai_sem_enam"
                :rata="isset($nilai_sem_enam) ? $rata_sem_enam : null"
                :rank="isset($nilai_sem_enam) ? $rank_sem_enam : null"
                :partisipan="isset($nilai_sem_enam) ? $partisipan_sem_enam : null"
              ></x-semester>
              <x-semester
                no="Nilai SKD"
                route="skd"
                :nilai="$nilai_skd"
                :rata="isset($nilai_skd) ? $rata_skd : null"
                :rank="isset($nilai_skd) ? $rank_skd : null"
                :partisipan="isset($nilai_skd) ? $partisipan_skd : null"
              ></x-semester>

            </tbody>
          </table>
    </div>
    <div class="card mt-5 p-3 shadow overflow-auto" >
        <div style="min-width: 500px">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<script>

const labels = [
  '1',
  '2',
  '3',
  '4',
  '5',
  '6',
];
const data = {
    labels: labels,
    datasets:
    [{
        label: 'IP saya',
        backgroundColor: '#a64ac9',
        borderColor: '#a64ac9',
        cubicInterpolationMode: 'monotone',
        data: [
            {{ $nilai_sem_satu }},
            {{ $nilai_sem_dua }},
            {{ $nilai_sem_tiga }},
            {{ $nilai_sem_empat }},
            {{ $nilai_sem_lima }},
            {{ $nilai_sem_enam }},

            ],
    },{
        label: 'Rata-rata IP partisipan',
        backgroundColor: '#17e9e0',
        borderColor: '#17e9e0',
        cubicInterpolationMode: 'monotone',
        data: [ 
            {{ $rata_sem_satu ?? 2.75 }},
            {{ $rata_sem_dua ?? 2.75}},
            {{ $rata_sem_tiga ?? 2.75}},
            {{ $rata_sem_empat ?? 2.75}},
            {{ $rata_sem_lima ?? 2.75}},
            {{ $rata_sem_enam ?? 2.75}},
        ],
    }]
};
const config = {
    type: 'line',
    data,
    options: {}
};
var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

@endsection

