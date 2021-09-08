@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-enam.store"
    tipe="Create"
    judul="Input data semester 6"
    >
    <x-form.input  label="Penilaian Usaha II (3 sks)" nama="pu2"></x-form>
    <x-form.input  label="Manajemen Risiko PKN (3 sks)" nama="manris"></x-form>
    <x-form.input  label="Manajemen Risiko PKN (3 sks)" nama="etikor"></x-form>
    <x-form.input  label="Budaya Nusantara dan Pengembangan Keperibadian (3 sks)" nama="bnpk"></x-form>
    <x-form.input  label="KTTA (3 sks)" nama="ktta"></x-form>
    <x-form.input  label="PKL (3 sks)" nama="pkl"></x-form>
</x-form>
@endsection
