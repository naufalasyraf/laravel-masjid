<?php

namespace App\Http\Controllers;

use App\Models\Jumat;
use App\Models\Imam;
use App\Models\Muadzin;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class JumatDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jumat.index', [
            'jumats' => Jumat::latest()->paginate(5)
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jumat.create',[
            'imams'=>Imam::all(),
            'muadzins'=>Muadzin::all(),
            'penguruses'=>Pengurus::all()
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
            'imam_id' =>'required',  
            'muadzin_id' =>'required', 
            'khatib' =>'required', 
            'pengurus_id' =>'required' 
        ]);
        Jumat::create($validatedData);
        return redirect('/jumatdashboard')->with('pesan','Data Pelaksana Jumat Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function show(Jumat $jumat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function edit(Jumat $jumat, $id)
    {
        return view('dashboard.jumat.edit',[
            'jumats'=>$jumat::find($id),
            'imams'=>Imam::all(),
            'muadzins'=>Muadzin::all(),
            'penguruses'=>Pengurus::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumat $jumat,$id)
    {
        $validatedData=$request->validate([
            'tanggal' =>'required',
            'imam_id' =>'required',  
            'muadzin_id' =>'required', 
            'khatib' =>'required', 
            'pengurus_id' =>'required'
        ]);
        Jumat::where('id',$id)->update($validatedData);
        return redirect('/jumatdashboard')->with('pesan','Data Pelaksana Jumat Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumat $jumat,$id)
    {
        Jumat::destroy($id);
        return redirect('../jumatdashboard')->with('pesan','Data Pelaksana Berhasil dihapus');
    }
}
