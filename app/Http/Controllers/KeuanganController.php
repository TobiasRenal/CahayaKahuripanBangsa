<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = Keuangan::all();
        return view('pages.keuangan',compact('keuangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $keuangan)
    {
        return view('pages.keuangan');
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
            'role_idWeb'=>'required',
            'nama_keuanganWeb'=>'required',
            'tanggal_keuanganWeb'=>'required',
            'jumlahWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);
        $keuangan = new Keuangan();
        $keuangan->role_id = $request->role_idWeb;
        $keuangan->nama_Keuangan = $request->nama_keuanganWeb;
        $keuangan->tanggal_laporan_keuangan = $request->tanggal_keuanganWeb;
        $keuangan->jumlah = $request->jumlahWeb;
        $keuangan->keterangan = $request->keteranganWeb;
        $keuangan->save();

        $keuangan = Keuangan::all();
        return redirect('/datakeuangan')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        $keuangan = Keuangan::all();
        return view('pages.keuangan',compact('keuangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan)
    {
        return view('pages.keuangan',compact('keuangan'));
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
            'role_idWeb'=>'required',
            'nama_keuanganWeb'=>'required',
            'tanggal_keuanganWeb'=>'required',
            'jumlahWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);

        Keuangan::create($request->all());
        return redirect()->route('/datakeuangan')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan)
    {
        $keuangan >delete();
        return redirect()->route('/datakeuangan')->with('success','Laporan Keuangan berhasil dihapus');
    }
     public function delete($id)
     {
         $keuangan = Keuangan::find($id);
         $keuangan->delete();
         return redirect('/datakeuangan')->with('success', 'Laporan Keuangan berhasil dihapus');
     }
}
