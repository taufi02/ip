<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NilaiSemLima;

class NilaiSemLimaController extends Controller
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
        return view('sem5.create');
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
            'pap3' => 'required|numeric|min:1|max:4',
            'pu1' => 'required|numeric|min:1|max:4',
            'keupub' => 'required|numeric|min:1|max:4',
            'pbj' => 'required|numeric|min:1|max:4',
            'aplbmn' => 'required|numeric|min:1|max:4',
            'simkn2' => 'required|numeric|min:1|max:4',
        ]);

        $pap3 = bcmul($request->pap3, 3);
        $pu1 = bcmul($request->pu1, 3);
        $keupub = bcmul($request->keupub, 3);
        $pbj = bcmul($request->pbj, 3);
        $aplbmn = bcmul($request->aplbmn, 3);
        $simkn2 = bcmul($request->simkn2, 3);

        $sks = 18;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pap3, $pu1),$keupub),$pbj),$aplbmn), $simkn2);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        $user->nilaiSemLima()->create($validated);
        $this->flash_data('success','Data nilai semester 5 berhasil disimpan');
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
        $nilai = NilaiSemLima::where('user_id', $id)->first();
        return view('sem5.edit', compact('nilai'));
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
            'pap3' => 'required|numeric|min:1|max:4',
            'pu1' => 'required|numeric|min:1|max:4',
            'keupub' => 'required|numeric|min:1|max:4',
            'pbj' => 'required|numeric|min:1|max:4',
            'aplbmn' => 'required|numeric|min:1|max:4',
            'simkn2' => 'required|numeric|min:1|max:4',
        ]);

        $pap3 = bcmul($request->pap3, 3);
        $pu1 = bcmul($request->pu1, 3);
        $keupub = bcmul($request->keupub, 3);
        $pbj = bcmul($request->pbj, 3);
        $aplbmn = bcmul($request->aplbmn, 3);
        $simkn2 = bcmul($request->simkn2, 3);

        $sks = 18;
        $jumlah_nilai = bcadd(bcadd(bcadd(bcadd(bcadd($pap3, $pu1),$keupub),$pbj),$aplbmn), $simkn2);
        $ip = $jumlah_nilai / $sks;
        $validated += ['ip'=> $ip];
        NilaiSemLima::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai semester 5 berhasil diperbarui');
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
