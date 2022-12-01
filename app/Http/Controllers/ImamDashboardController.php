<?php

namespace App\Http\Controllers;

use App\Models\Imam;
use Illuminate\Http\Request;

class ImamDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.imam.index', [
            'imams' => Imam::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.imam.create',[
            'imams'=>Imam::all()
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
        Imam::create($validatedData);
        return redirect('/imamdashboard')->with('pesan','Data Imam Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function show(Imam $imam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function edit(Imam $imam, $id)
    {
        return view('dashboard.imam.edit',[
            'imams'=>$imam::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imam $imam, $id)
    {
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        Imam::where('id',$id)->update($validatedData);
        return redirect('/imamdashboard')->with('pesan','Data Imam Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imam  $imam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imam $imam, $id)
    {
        Imam::destroy($id);
        return redirect('../imamdashboard')->with('pesan','Data Imam Berhasil dihapus');
    }
}
