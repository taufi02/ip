<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="2" field="user.pancasila" label="Pancasila"></x-form>
    <x-form.input sks="2" field="user.bing" label="Bahasa Inggris"></x-form>
    <x-form.input sks="3" field="user.mikro" label="Ekonomi Mikro"></x-form>
    <x-form.input sks="3" field="user.pajak" label="Pajak"></x-form>
    <x-form.input sks="2" field="user.ppkn" label="PPKN"></x-form>
    <x-form.input sks="3" field="user.pengakun2" label="Pengakun 2"></x-form>
    <x-form.input sks="2" field="user.hukperus" label="Hukum Perusahaan"></x-form>
    <x-form.input sks="3" field="user.hukper" label="Hukum Perdata"></x-form>
    <x-form.input sks="3" field="user.piutang" label="Pengurusan Piutang Negara"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>
