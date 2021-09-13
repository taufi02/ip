<div class="card p-8 bg-base-200 container mx-auto my-8">

    <x-form.input sks="-" field="user.twk" label="Tes Wawasan Kebangsaan"></x-form>
    <x-form.input sks="-" field="user.tiu" label="Tes Intelegensia Umum"></x-form>
    <x-form.input sks="-" field="user.tkp" label="Tes Kepribadian"></x-form>

        <div class="grid grid-cols-2 gap-4">
            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-outline" >Kembali</a>
            <button class="btn btn-primary btn-primary" wire:click="update">Submit</button>
        </div>

</div>
