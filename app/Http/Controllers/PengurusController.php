<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = Pengurus::get();
        return view('pages.organisasi',["pengurus"=>$pengurus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $pengurus)
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
        $pengurus = new Pengurus;
        $pengurus->role_id = $request->role_id;
        $pengurus->nama_pengurus = $request->nama_pengurus;
        $pengurus->tempat_lahir=$request->tempat_lahir;
        $pengurus->tanggal_lahir=$request->tanggal_lahir;
        $pengurus->alamat=$request->alamat;
        $pengurus->no_telepon=$request->no_telepon;
        $pengurus->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    public function delete($id)
    {
        $pengurus = pengurus::find($id);
        $pengurus->delete();

        return redirect('/pages/organisasi')->with('success', 'Pengurus berhasil dihapus');
    }
}
