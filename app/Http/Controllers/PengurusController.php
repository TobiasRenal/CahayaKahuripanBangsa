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
        $pengurus = Pengurus::all();
        return view('pages.organisasi',compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $pengurus)
    {
        return view('pages.organisasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_id'=>'required',
            'nama_pengurus'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'no_telepon'=>'required',
        ]);

        Pengurus::create($request->all());
        return redirect()->route('pages.organisasi')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pengurus $pengurus)
    {
        return view('pages.organisasi',compact('pengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pengurus $pengurus)
    {
        return view('pages.organisasi',compact('pengurus'));
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
        $request->validate([
            'role_id'=>'required',
            'nama_pengurus'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'no_telepon'=>'required',
        ]);

        Pengurus::create($request->all());
        return redirect()->route('pages.organisasi')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengurus $pengurus)
    {
        $pengurus >delete();
        return redirect()->route('pages.organisasi')->with('success','Pengurus berhasil dihapus');
    }
    // public function delete($id)
    // {
    //     $pengurus = pengurus::find($id);
    //     $pengurus->delete();

    //     return redirect('/pages/organisasi')->with('success', 'Pengurus berhasil dihapus');
    // }
}
