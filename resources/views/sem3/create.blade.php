@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-tiga.store"
    tipe="Create"
    judul="Input data semester 3"
    >
    <x-form.input  label="Hukum Keuangan Negara (3 sks)" nama="hkn"></x-form>
    <x-form.input  label="Akuntansi Biaya (3 sks)" nama="akbi"></x-form>
    <x-form.input  label="Manajemen Keuangan (3 sks)" nama="mankeu"></x-form>
    <x-form.input  label="Hukum Pertanahan (3 sks)" nama="hukpertanahan"></x-form>
    <x-form.input  label="Pengetahuan Lelang (3 sks)" nama="lelang"></x-form>
    <x-form.input  label="Penilaian Aset dan Properti I (3 sks)" nama="pap1"></x-form>
    <x-form.input  label="Pengelolaan BMN I (3 sks)" nama="bmn1"></x-form>
    <x-form.input  label="Hukum Acara Perdata (2 sks)" nama="hap"></x-form>
</x-form>
@endsection
