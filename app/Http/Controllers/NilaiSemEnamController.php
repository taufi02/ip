<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NilaiSemEnam;

class NilaiSemEnamController extends Controller
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
        return view('sem6.create');
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
            'pu2' => 'required|numeric|min:1|max:4',
            'manris' => 'required|numeric|min:1|max:4',
            'etikor' => 'required|numeric|min:1|max:4',
            'bnpk' => 'required|numeric|min:1|max:4',
            'ktta' => 'required|numeric|min:1|max:4',
            'pkl' => 'required|numeric|min:1|max:4',
        ]);

        $pu2 = bcmul($request->pu2, 3);
        $manris = bcmul($request->manris, 2);
        $etikor = bcmul($request->etikor, 3);
        $bnpk = bcmul($request->bnpk, 3);
        $ktta = bcmul($request->ktta, 2);
        $pkl = bcmul($request->pkl, 3);

        $sks = 16;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pu2, $manris),$etikor),$bnpk),$ktta), $pkl);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        $user->nilaiSemEnam()->create($validated);
        $this->flash_data('success','Data nilai semester 6 berhasil disimpan');
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
        $nilai = NilaiSemEnam::where('user_id', $id)->first();
        return view('sem6.edit', compact('nilai'));
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
            'pu2' => 'required|numeric|min:1|max:4',
            'manris' => 'required|numeric|min:1|max:4',
            'etikor' => 'required|numeric|min:1|max:4',
            'bnpk' => 'required|numeric|min:1|max:4',
            'ktta' => 'required|numeric|min:1|max:4',
            'pkl' => 'required|numeric|min:1|max:4',
        ]);

        $pu2 = bcmul($request->pu2, 3);
        $manris = bcmul($request->manris, 2);
        $etikor = bcmul($request->etikor, 3);
        $bnpk = bcmul($request->bnpk, 3);
        $ktta = bcmul($request->ktta, 2);
        $pkl = bcmul($request->pkl, 3);

        $sks = 16;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pu2, $manris),$etikor),$bnpk),$ktta), $pkl);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        NilaiSemEnam::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai semester 6 berhasil diperbarui');
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
