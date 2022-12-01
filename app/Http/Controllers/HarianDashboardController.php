<?php

namespace App\Http\Controllers;

use App\Models\Harian;
use App\Models\Imam;
use App\Models\Muadzin;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class HarianDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.harian.index', [
            'harians' => Harian::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.harian.create',[
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
            'pengurus_id' =>'required' 
        ]);
        Harian::create($validatedData);
        return redirect('/hariandashboard')->with('pesan','Data Pelaksana Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function show(Harian $harian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function edit(Harian $harian, $id)
    {
        return view('dashboard.harian.edit',[
            'harians'=>$harian::find($id),
            'imams'=>Imam::all(),
            'muadzins'=>Muadzin::all(),
            'penguruses'=>Pengurus::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harian $harian,$id)
    {
        $validatedData=$request->validate([
            'tanggal' =>'required',
            'imam_id' =>'required',  
            'muadzin_id' =>'required', 
            'pengurus_id' =>'required'
        ]);
        Harian::where('id',$id)->update($validatedData);
        return redirect('/hariandashboard')->with('pesan','Data Pelaksana Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Harian  $harian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harian $harian,$id)
    {
        Harian::destroy($id);
        return redirect('../hariandashboard')->with('pesan','Data Pelaksana Berhasil dihapus');
    }
}
