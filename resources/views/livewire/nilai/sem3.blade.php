<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="3" field="user.hkn" label="Hukum Keuangan Negara"></x-form>
    <x-form.input sks="3" field="user.akbi" label="Akuntansi Biaya"></x-form>
    <x-form.input sks="3" field="user.mankeu" label="Manajemen Keuangan"></x-form>
    <x-form.input sks="3" field="user.hukpertanahan" label="Hukum Pertanahan"></x-form>
    <x-form.input sks="3" field="user.lelang" label="Pengetahuan Lelang"></x-form>
    <x-form.input sks="3" field="user.pap1" label="Penilaian Aset dan Properti II"></x-form>
    <x-form.input sks="3" field="user.bmn1" label="Pengelolaan BMN I"></x-form>
    <x-form.input sks="2" field="user.hap" label="Hukum Acara Perdata"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>

