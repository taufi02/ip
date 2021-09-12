<x-form.form
    route="nilai-sem-dua.update"
    tipe="Update"
    :user="['nilai_sem_dua' => session('user')->id]"
    judul="Input data semester 2"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->pancasila " label="Pancasila (2 sks)" nama="pancasila"></x-form>
    <x-form.input :edit="$nilai->bing " label="Bahasa Inggris (2 sks)" nama="bing"></x-form>
    <x-form.input :edit="$nilai->mikro " label="Mikroekonomi (3 sks)" nama="mikro"></x-form>
    <x-form.input :edit="$nilai->pajak " label="Pengantar Perpajakan (3 sks)" nama="pajak"></x-form>
    <x-form.input :edit="$nilai->ppkn " label="PPKN (2 sks)" nama="ppkn"></x-form>
    <x-form.input :edit="$nilai->pengakun2 " label="Pengantar Akuntansi II (3 sks)" nama="pengakun2"></x-form>
    <x-form.input :edit="$nilai->hukperus " label="Hukum Perusahaan (2 sks)" nama="hukperus"></x-form>
    <x-form.input :edit="$nilai->hukper " label="Hukum Perdata (3 sks)" nama="hukper"></x-form>
    <x-form.input :edit="$nilai->piutang " label="Pengurusan Piutang Negara (3 sks)" nama="piutang"></x-form>
</x-form>
