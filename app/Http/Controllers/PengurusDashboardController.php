<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class PengurusDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengurus.index', [
            'penguruses' => Pengurus::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengurus.create',[
            'penguruses'=>Pengurus::all(),
            'jabatans'=>Jabatan::all()
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
            'nama' =>'required',
            'tanggal_lahir' =>'required',  
            'jenis_kelamin' =>'required', 
            'jabatan_id' =>'required',
            'alamat' =>'required' 
        ]);
        Pengurus::create($validatedData);
        return redirect('/pengurusdashboard')->with('pesan','Data Pengurus Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus, $id)
    {
        return view('dashboard.pengurus.edit',[
            'penguruses'=>$pengurus::find($id),
            'jabatans'=>Jabatan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengurus $pengurus, $id)
    {
        $validatedData=$request->validate([
            'nama' =>'required',
            'tanggal_lahir' =>'required',  
            'jenis_kelamin' =>'nullable', 
            'jabatan_id' =>'nullable',
            'alamat' =>'nullable'
        ]);
        Pengurus::where('id',$id)->update($validatedData);
        return redirect('/pengurusdashboard')->with('pesan','Data Pengurus Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus, $id)
    {
        Pengurus::destroy($id);
        return redirect('../pengurusdashboard')->with('pesan','Data Pengurus Berhasil dihapus');
    }
}
