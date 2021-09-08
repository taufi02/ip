<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\skd;

class SkdController extends Controller
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
        return view('skd.create');
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
            'twk' => 'required|numeric|max:150',
            'tiu' => 'required|numeric|max:175',
            'tkp' => 'required|numeric|max:225',
        ]);

        $skd = bcadd(bcadd($request->twk, $request->tiu),$request->tkp);
        $validated += ['skd'=> $skd];
        $user->skd()->create($validated);
        $this->flash_data('success','Data tes SKD berhasil disimpan');
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
        $nilai = skd::where('user_id', $id)->first();
        return view('skd.edit', compact('nilai'));
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
            'twk' => 'required|numeric|max:150',
            'tiu' => 'required|numeric|max:175',
            'tkp' => 'required|numeric|max:225',
        ]);

        $skd = bcadd(bcadd($request->twk, $request->tiu),$request->tkp);
        $validated += ['skd'=> $skd];
        skd::where('user_id', $id)->update($validated);
        $this->flash_data('success','Data nilai tes SKD diperbarui');
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
