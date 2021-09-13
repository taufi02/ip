<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="2" field="user.agama" label="Agama"></x-form>
    <x-form.input sks="2" field="user.kwn" label="Kewarganegaraan"></x-form>
    <x-form.input sks="2" field="user.pih" label="PIH"></x-form>
    <x-form.input sks="3" field="user.pie" label="PIE"></x-form>
    <x-form.input sks="2" field="user.bi" label="Bahasa Indonesia"></x-form>
    <x-form.input sks="2" field="user.stat" label="Statistika"></x-form>
    <x-form.input sks="3" field="user.pengakun1" label="Pengakun 1"></x-form>
    <x-form.input sks="3" field="user.manajemen" label="Manajemen"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>
