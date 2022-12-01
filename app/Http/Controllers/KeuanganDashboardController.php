<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.keuangan.index', [
            'keuangans' => Keuangan::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.keuangan.create',[
            'keuangans'=>Keuangan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'tanggal' =>'required',
            'keterangan' =>'required',  
            'masuk' =>'nullable', 
            'keluar' =>'nullable'
        ]);
        Keuangan::create($validatedData);
        return redirect('/keuangandashboard')->with('pesan','Data Keuangan Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan, $id)
    {
        return view('dashboard.keuangan.edit',[
            'keuangans'=>$keuangan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keuangan $keuangan, $id)
    {
        $validatedData=$request->validate([
            'tanggal' =>'required',
            'keterangan' =>'required',  
            'masuk' =>'nullable', 
            'keluar' =>'nullable'
        ]);
        Keuangan::where('id',$id)->update($validatedData);
        return redirect('/keuangandashboard')->with('pesan','Data Keuangan Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan, $id)
    {
        Keuangan::destroy($id);
        return redirect('../keuangandashboard')->with('pesan','Data Keuangan Berhasil dihapus');
    }
}
