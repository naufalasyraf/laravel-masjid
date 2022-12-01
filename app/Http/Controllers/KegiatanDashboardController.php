<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kegiatan.index', [
            'kegiatans' => Kegiatan::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kegiatan.create',[
            'kegiatans'=>Kegiatan::all()
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
            'kegiatan' =>'required',  
            'jam_mulai' =>'required', 
            'jam_selesai' =>'required'
        ]);
        Kegiatan::create($validatedData);
        return redirect('/kegiatandashboard')->with('pesan','Data Keuangan Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan, $id)
    {
        return view('dashboard.kegiatan.edit',[
            'kegiatans'=>$kegiatan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validatedData=$request->validate([
            'tanggal' =>'required',
            'kegiatan' =>'required',  
            'jam_mulai' =>'required', 
            'jam_selesai' =>'required'
        ]);
        Keuangan::where('id',$id)->update($validatedData);
        return redirect('/kegiatandashboard')->with('pesan','Data Kegiatan Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($id);
        return redirect('../kegiatandashboard')->with('pesan','Data Kegiatan Berhasil dihapus');
    }
}
