<x-form.form
    route="nilai-sem-satu.update"
    tipe="Update"
    :user="['nilai_sem_satu' => session('user')->id]"
    judul="Input data semester 1"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->agama " label="Agama (2 sks)" nama="agama"></x-form>
    <x-form.input :edit="$nilai->kwn " label="Kewarganegaraan (2 sks)" nama="kwn"></x-form>
    <x-form.input :edit="$nilai->pih " label="Pengantar Ilmu Hukum (2 sks)" nama="pih"></x-form>
    <x-form.input :edit="$nilai->pie " label="Pengantar Ilmu Ekonomi (3 sks)" nama="pie"></x-form>
    <x-form.input :edit="$nilai->bi " label="Bahasa Indonesia (2 sks)" nama="bi"></x-form>
    <x-form.input :edit="$nilai->stat " label="Statistika (2 sks)" nama="stat"></x-form>
    <x-form.input :edit="$nilai->pengakun1 " label="Pengantar Akuntansi 1 (3 sks)" nama="pengakun1"></x-form>
    <x-form.input :edit="$nilai->manajemen " label="Manajemen (3 sks)" nama="manajemen"></x-form>
</x-form>
