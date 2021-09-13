<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="3" field="user.pu2" label="Penilaian Usaha II"></x-form>
    <x-form.input sks="2" field="user.manris" label="Manajemen Risiko PKN"></x-form>
    <x-form.input sks="3" field="user.etikor" label="Etika dan Anti Korupsi"></x-form>
    <x-form.input sks="3" field="user.bnpk" label="Budaya Nusantara dan Pengembangan Keperibadian"></x-form>
    <x-form.input sks="2" field="user.ktta" label="KTTA"></x-form>
    <x-form.input sks="3" field="user.pkl" label="PKL"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>
