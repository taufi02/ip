@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-lima.store"
    tipe="Create"
    judul="Input data semester 5"
    >
    <x-form.input  label="Penilaian Aset dan Properti III (3 sks)" nama="pap3"></x-form>
    <x-form.input  label="Penilaian Usaha I (3 sks)" nama="pu1"></x-form>
    <x-form.input  label="Keuangan Publik (3 sks)" nama="keupub"></x-form>
    <x-form.input  label="Pengadaan Barang dan Jasa (3 sks)" nama="pbj"></x-form>
    <x-form.input  label="Aplikasi LBMN (3 sks)" nama="aplbmn"></x-form>
    <x-form.input  label="Aplikasi SIM KN II (3 sks)" nama="simkn2"></x-form>
</x-form>
@endsection
