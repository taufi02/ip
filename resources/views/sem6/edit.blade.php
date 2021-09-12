<x-form.form
    route="nilai-sem-enam.update"
    tipe="Update"
    :user="['nilai_sem_enam' => session('user')->id]"
    judul="Input data semester 6"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->pu2" label="Penilaian Usaha II (3 sks)" nama="pu2"></x-form>
    <x-form.input :edit="$nilai->manris" label="Manajemen Risiko PKN (2 sks)" nama="manris"></x-form>
    <x-form.input :edit="$nilai->etikor" label="Etika dan Anti Korupsi (3 sks)" nama="etikor"></x-form>
    <x-form.input :edit="$nilai->bnpk" label="Budaya Nusantara dan Pengembangan Keperibadian (3 sks)" nama="bnpk"></x-form>
    <x-form.input :edit="$nilai->ktta" label="KTTA (2 sks)" nama="ktta"></x-form>
    <x-form.input :edit="$nilai->pkl" label="PKL (3 sks)" nama="pkl"></x-form>
</x-form>
