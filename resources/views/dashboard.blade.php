@extends('layout.index')
@section('content')
<div class="grid grid-cols-12 p-8 text-primary-content gap-x-4 gap-y-4 items-center">
    <div class="col-span-12 md:col-span-6 md:row-span-3 card shadow-xl p-8 bg-base-200 ">
      <canvas id="myChart"></canvas>
    </div>
    <div class="col-span-12 md:col-span-6 card shadow-xl p-8 flex flex-row items-center space-x-4 bg-base-200">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
      <span >
        Pilihan 1 : 
      </span>
      <select class="select select-sm select-bordered select-primary ">
        <option disabled="disabled" selected="selected">Pilih Instansi</option> 
        <option>telekinesis</option> 
        <option>time travel</option> 
        <option>invisibility</option>
      </select>
      <small>
        26 Orang memilih kantor yang sama
      </small>
    </div>
    <div class="col-span-12 md:col-span-6 card shadow-xl p-8 flex flex-row items-center space-x-4 bg-base-200">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
      <span>
        Pilihan 1 : Kantor Pusat Jatinegara
      </span>
    </div>
    <div class="col-span-12 md:col-span-6 card shadow-xl p-8 flex flex-row items-center space-x-4 bg-base-200">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
      <span>
        Pilihan 1 : Kantor Pusat Jatinegara
      </span>
    </div>
    <!-- Tabel IP -->
    <div class="col-span-12 card shadow-xl p-8 bg-base-200">
        @if (session()->has('pesan_isi'))
          <div class="alert alert-{{ session()->get('pesan_tipe') }} alert-dismissible fade show" role="alert">
              {{ session()->get('pesan_isi') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <table class="table table-zebra">
            <thead>
              <tr>
                <th>#</th>
                <th>IP / Nilai SKD</th>
                <th>Rata-rata angkatan</th>
                <th>Peringkat</th>
                <th style="max-width: 200px" class="text-center">Partisipan</th>
                <th>Aksi</th>
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

