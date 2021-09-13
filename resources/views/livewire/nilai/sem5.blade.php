<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="3" field="user.pap3" label="Penilaian Aset dan Properti III"></x-form>
    <x-form.input sks="3" field="user.pu1" label="Penilaian Usaha I"></x-form>
    <x-form.input sks="3" field="user.keupub" label="Keuangan Publik"></x-form>
    <x-form.input sks="3" field="user.pbj" label="Pengadaan Barang dan Jasa "></x-form>
    <x-form.input sks="3" field="user.aplbmn" label="Aplikasi LBMN"></x-form>
    <x-form.input sks="3" field="user.simkn2" label="Aplikasi SIM KN II"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>







