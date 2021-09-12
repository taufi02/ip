<x-form.form
    route="skd.update"
    tipe="Update"
    :user="['skd' => session('user')->id]"
    judul="Input data tes SKD"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->twk" label="Tes Wawasan Kebangsaan" nama="twk"></x-form>
    <x-form.input :edit="$nilai->tiu" label="Tes Intelegensia Umum" nama="tiu"></x-form>
    <x-form.input :edit="$nilai->tkp" label="Tes Karakteristik Pribadi" nama="tkp"></x-form>
</x-form>
