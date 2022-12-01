<?php

namespace App\Http\Controllers;

use App\Models\Jumat;
use Illuminate\Http\Request;

class JumatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jumat.index', [
            'jumats' => Jumat::latest()->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Jumat $jumat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jumat $jumat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jumat  $jumat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jumat $jumat)
    {
        //
    }
}
