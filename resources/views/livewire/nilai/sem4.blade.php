<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="3" field="user.akpem" label="Akuntansi Pemerintah Pusat"></x-form>
    <x-form.input sks="3" field="user.pap2" label="Penilaian Aset dan Properti II"></x-form>
    <x-form.input sks="3" field="user.bmn2" label="Pengelolaan BMN II"></x-form>
    <x-form.input sks="3" field="user.knd" label="Pengelolaan KN Dipisahkan"></x-form>
    <x-form.input sks="3" field="user.knl" label="Pengelolaan KN Lainnnya"></x-form>
    <x-form.input sks="3" field="user.simkn" label="Aplikasi SIM KN I"></x-form>
    <x-form.input sks="3" field="user.makro" label="Makroekonomi"></x-form>
    <x-form.input sks="2" field="user.ptun" label="Peradilan TUN "></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>
