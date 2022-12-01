<?php

namespace App\Http\Controllers;

use App\Models\Muadzin;
use Illuminate\Http\Request;

class MuadzinDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.muadzin.index', [
            'muadzins' => Muadzin::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.muadzin.create',[
            'muadzins'=>Muadzin::all()
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
            'nama' =>'required'
        ]);
        Muadzin::create($validatedData);
        return redirect('/muadzindashboard')->with('pesan','Data Muadzin Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Muadzin  $muadzin
     * @return \Illuminate\Http\Response
     */
    public function show(Muadzin $muadzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Muadzin  $muadzin
     * @return \Illuminate\Http\Response
     */
    public function edit(Muadzin $muadzin, $id)
    {
        return view('dashboard.muadzin.edit',[
            'muadzins'=>$muadzin::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Muadzin  $muadzin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muadzin $muadzin, $id)
    {
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        Muadzin::where('id',$id)->update($validatedData);
        return redirect('/muadzindashboard')->with('pesan','Data Muadzin Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Muadzin  $muadzin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muadzin $muadzin, $id)
    {
        Muadzin::destroy($id);
        return redirect('../muadzindashboard')->with('pesan','Data Muadzin Berhasil dihapus');
    }
}
