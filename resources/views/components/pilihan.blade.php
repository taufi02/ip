<div class="col-span-12 md:col-span-6 card p-8 flex flex-row justify-start items-center space-x-4 bg-base-200">
    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
    <div class="flex flex-col items-start">
        <span >
          {{ $judul }}
        </span>
        <div class="flex flex-row items-baseline space-x-4">
            <select class="select select-sm select-bordered select-primary mt-2 " wire:model="{{ $wireModel }}">
              <option disabled="disabled" selected="selected">Pilih Instansi</option>
              @forelse($instansis as $instansi)
                  <option wire:click="{{ $wireClick }}" value="{{ $instansi->id }}">{{$instansi->nama}}</option>
              @empty
                  <option>No data available</option>
              @endforelse
            </select>
            <button class="btn btn-sm btn-primary" wire:click="show_instansi('{{ $pilihan }}')">
                Lihat Data
            </button>
        </div>
        @if($pilihanInstansi)
          <small>
              {{ $jumlahInstansi }} Orang memilih kantor yang sama dengan pilihanmu pada {{ $judul }}!
          </small>
        @endif
    </div>
</div>
