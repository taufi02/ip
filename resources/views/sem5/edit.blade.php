@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-lima.update"
    tipe="Update"
    :user="['nilai_sem_lima' => session('user')->id]"
    judul="Input data semester 5"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->pap3" label="Penilaian Aset dan Properti III (3 sks)" nama="pap3"></x-form>
    <x-form.input :edit="$nilai->pu1" label="Penilaian Usaha I (3 sks)" nama="pu1"></x-form>
    <x-form.input :edit="$nilai->keupub" label="Keuangan Publik (3 sks)" nama="keupub"></x-form>
    <x-form.input :edit="$nilai->pbj" label="Pengadaan Barang dan Jasa (3 sks)" nama="pbj"></x-form>
    <x-form.input :edit="$nilai->aplbmn" label="Aplikasi LBMN (3 sks)" nama="aplbmn"></x-form>
    <x-form.input :edit="$nilai->simkn2" label="Aplikasi SIM KN II (3 sks)" nama="simkn2"></x-form>
</x-form>
@endsection
