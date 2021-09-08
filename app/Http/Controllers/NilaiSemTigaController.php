<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NilaiSemTiga;

class NilaiSemTigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sem3.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->skala();
        $user = User::find(session('user')->id);
        $validated = $request->validate([
            'hkn' => 'required|numeric|min:1|max:4',
            'akbi' => 'required|numeric|min:1|max:4',
            'mankeu' => 'required|numeric|min:1|max:4',
            'hukpertanahan' => 'required|numeric|min:1|max:4',
            'lelang' => 'required|numeric|min:1|max:4',
            'pap1' => 'required|numeric|min:1|max:4',
            'bmn1' => 'required|numeric|min:1|max:4',
            'hap' => 'required|numeric|min:1|max:4',
        ]);

        $hkn = bcmul($request->hkn, 3);
        $akbi = bcmul($request->akbi, 3);
        $mankeu = bcmul($request->mankeu, 3);
        $hukpertanahan = bcmul($request->hukpertanahan, 3);
        $lelang = bcmul($request->lelang, 3);
        $pap1 = bcmul($request->pap1, 3);
        $bmn1 = bcmul($request->bmn1, 3);
        $hap = bcmul($request->hap, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($hkn, $akbi),$mankeu),$hukpertanahan),$lelang), $pap1),$bmn1),$hap);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        $user->nilaiSemTiga()->create($validated);

        $this->flash_data('success','Data nilai semester 3 berhasil disimpan');
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($id != session('user')->id)
        {
            return redirect(route('home'));
        }
        $nilai = NilaiSemTiga::where('user_id', $id)->first();
        return view('sem3.edit', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->skala();
        $validated = $request->validate([
            'hkn' => 'required|numeric|min:1|max:4',
            'akbi' => 'required|numeric|min:1|max:4',
            'mankeu' => 'required|numeric|min:1|max:4',
            'hukpertanahan' => 'required|numeric|min:1|max:4',
            'lelang' => 'required|numeric|min:1|max:4',
            'pap1' => 'required|numeric|min:1|max:4',
            'bmn1' => 'required|numeric|min:1|max:4',
            'hap' => 'required|numeric|min:1|max:4',
        ]);

        $hkn = bcmul($request->hkn, 3);
        $akbi = bcmul($request->akbi, 3);
        $mankeu = bcmul($request->mankeu, 3);
        $hukpertanahan = bcmul($request->hukpertanahan, 3);
        $lelang = bcmul($request->lelang, 3);
        $pap1 = bcmul($request->pap1, 3);
        $bmn1 = bcmul($request->bmn1, 3);
        $hap = bcmul($request->hap, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($hkn, $akbi),$mankeu),$hukpertanahan),$lelang), $pap1),$bmn1),$hap);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        NilaiSemTiga::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai semester 1 berhasil diperbarui');
        return redirect(route('home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
