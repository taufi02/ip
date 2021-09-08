<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NilaiSemSatu;

class NilaiSemSatuController extends Controller
{
    public function create()
    {
        return view('sem1.create');
    }

    public function store(Request $request)
    {
        $this->skala();
        $user = User::find(session('user')->id);
        $validated = $request->validate([
            'agama' => 'required|numeric|min:1|max:4',
            'kwn' => 'required|numeric|min:1|max:4',
            'pih' => 'required|numeric|min:1|max:4',
            'pie' => 'required|numeric|min:1|max:4',
            'bi' => 'required|numeric|min:1|max:4',
            'stat' => 'required|numeric|min:1|max:4',
            'pengakun1' => 'required|numeric|min:1|max:4',
            'manajemen' => 'required|numeric|min:1|max:4',
        ]);

        $agama = bcmul($request->agama, 2);
        $kwn = bcmul($request->kwn, 2);
        $pih = bcmul($request->pih, 2);
        $pie = bcmul($request->pie, 3);
        $bi = bcmul($request->bi, 2);
        $stat = bcmul($request->stat, 2);
        $pengakun1 = bcmul($request->pengakun1, 3);
        $manajemen = bcmul($request->manajemen, 3);

        $sks = 19;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($agama, $kwn),$pih),$pie),$bi), $stat),$pengakun1),$manajemen);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        $user->nilaiSemSatu()->create($validated);
        $this->flash_data('success','Data nilai semester 1 berhasil disimpan');
        return redirect(route('home'));
    }
    public function edit($id)
    {
        if($id != session('user')->id)
        {
            return redirect(route('home'));
        }
        $nilai = NilaiSemSatu::where('user_id', $id)->first();
        return view('sem1.edit', compact('nilai'));
    }
    public function update(Request $request, $id)
    {
        $this->skala();
        $validated = $request->validate([
            'agama' => 'required|numeric|min:1|max:4',
            'kwn' => 'required|numeric|min:1|max:4',
            'pih' => 'required|numeric|min:1|max:4',
            'pie' => 'required|numeric|min:1|max:4',
            'bi' => 'required|numeric|min:1|max:4',
            'stat' => 'required|numeric|min:1|max:4',
            'pengakun1' => 'required|numeric|min:1|max:4',
            'manajemen' => 'required|numeric|min:1|max:4',
        ]);

        $agama = bcmul($request->agama, 2);
        $kwn = bcmul($request->kwn, 2);
        $pih = bcmul($request->pih, 2);
        $pie = bcmul($request->pie, 3);
        $bi = bcmul($request->bi, 2);
        $stat = bcmul($request->stat, 2);
        $pengakun1 = bcmul($request->pengakun1, 3);
        $manajemen = bcmul($request->manajemen, 3);
        $sks = 19;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($agama, $kwn),$pih),$pie),$bi), $stat),$pengakun1),$manajemen);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        NilaiSemSatu::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai semester 1 berhasil diperbarui');
        return redirect(route('home'));
    }
}
