@extends('layout.index')
@section('content')
<x-form.form
    route="nilai-sem-empat.update"
    tipe="Update"
    :user="['nilai_sem_empat' => session('user')->id]"
    judul="Input data semester 4"
    >
    @method('PATCH')
    <x-form.input :edit="$nilai->akpem " label="Akuntansi Pemerintah Pusat (3 sks)" nama="akpem"></x-form>
    <x-form.input :edit="$nilai->pap2 " label="Penilaian Aset dan Properti II (3 sks)" nama="pap2"></x-form>
    <x-form.input :edit="$nilai->bmn2 " label="Pengelolaan BMN II (3 sks)" nama="bmn2"></x-form>
    <x-form.input :edit="$nilai->knd " label="Pengelolaan KN Dipisahkan (3 sks)" nama="knd"></x-form>
    <x-form.input :edit="$nilai->knl " label="Pengelolaan KN Lainnnya (3 sks)" nama="knl"></x-form>
    <x-form.input :edit="$nilai->simkn " label="Aplikasi SIM KN I (3 sks)" nama="simkn"></x-form>
    <x-form.input :edit="$nilai->makro " label="Makroekonomi (3 sks)" nama="makro"></x-form>
    <x-form.input :edit="$nilai->ptun " label="Peradilan TUN (2 sks)" nama="ptun"></x-form>
</x-form>
@endsection
