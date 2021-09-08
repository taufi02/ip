@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-tiga.update"
    tipe="Update"
    :user="['nilai_sem_tiga' => session('user')->id]"
    judul="Input data semester 3"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->hkn " label="Hukum Keuangan Negara (3 sks)" nama="hkn"></x-form>
    <x-form.input :edit="$nilai->akbi " label="Akuntansi Biaya (3 sks)" nama="akbi"></x-form>
    <x-form.input :edit="$nilai->mankeu " label="Manajemen Keuangan (3 sks)" nama="mankeu"></x-form>
    <x-form.input :edit="$nilai->hukpertanahan " label="Hukum Pertanahan (3 sks)" nama="hukpertanahan"></x-form>
    <x-form.input :edit="$nilai->lelang " label="Pengetahuan Lelang (3 sks)" nama="lelang"></x-form>
    <x-form.input :edit="$nilai->pap1 " label="Penilaian Aset dan Properti I (3 sks)" nama="pap1"></x-form>
    <x-form.input :edit="$nilai->bmn1 " label="Pengelolaan BMN I (3 sks)" nama="bmn1"></x-form>
    <x-form.input :edit="$nilai->hap " label="Hukum Acara Perdata (2 sks)" nama="hap"></x-form>
</x-form>
@endsection
