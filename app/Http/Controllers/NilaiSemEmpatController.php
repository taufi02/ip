<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NilaiSemEmpat;

class NilaiSemEmpatController extends Controller
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
        return view('sem4.create');
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
            'akpem' => 'required|numeric|min:1|max:4',
            'bmn2' => 'required|numeric|min:1|max:4',
            'pap2' => 'required|numeric|min:1|max:4',
            'knd' => 'required|numeric|min:1|max:4',
            'knl' => 'required|numeric|min:1|max:4',
            'simkn' => 'required|numeric|min:1|max:4',
            'makro' => 'required|numeric|min:1|max:4',
            'ptun' => 'required|numeric|min:1|max:4',
        ]);

        $akpem = bcmul($request->akpem, 3);
        $bmn2 = bcmul($request->bmn2, 3);
        $pap2 = bcmul($request->pap2, 3);
        $knd = bcmul($request->knd, 3);
        $knl = bcmul($request->knl, 3);
        $simkn = bcmul($request->simkn, 3);
        $makro = bcmul($request->makro, 3);
        $ptun = bcmul($request->ptun, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($akpem, $bmn2),$pap2),$knd),$knl), $simkn),$makro),$ptun);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        $user->nilaiSemEmpat()->create($validated);
        $this->flash_data('success','Data nilai semester 4 berhasil disimpan');
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
        $nilai = NilaiSemEmpat::where('user_id', $id)->first();
        return view('sem4.edit', compact('nilai'));
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
            'akpem' => 'required|numeric|min:1|max:4',
            'bmn2' => 'required|numeric|min:1|max:4',
            'pap2' => 'required|numeric|min:1|max:4',
            'knd' => 'required|numeric|min:1|max:4',
            'knl' => 'required|numeric|min:1|max:4',
            'simkn' => 'required|numeric|min:1|max:4',
            'makro' => 'required|numeric|min:1|max:4',
            'ptun' => 'required|numeric|min:1|max:4',
        ]);

        $akpem = bcmul($request->akpem, 3);
        $bmn2 = bcmul($request->bmn2, 3);
        $pap2 = bcmul($request->pap2, 3);
        $knd = bcmul($request->knd, 3);
        $knl = bcmul($request->knl, 3);
        $simkn = bcmul($request->simkn, 3);
        $makro = bcmul($request->makro, 3);
        $ptun = bcmul($request->ptun, 2);

        $sks = 23;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd(bcadd(bcadd($akpem, $bmn2),$pap2),$knd),$knl), $simkn),$makro),$ptun);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        NilaiSemEmpat::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai semester 4 berhasil diperbarui');
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
