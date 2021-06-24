<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\RolePengurus;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $inventaris = \App\Models\Inventaris::where('nama_inventaris','LIKE','%'.$request->cari.'%')->get();
        }else{
            $inventaris = Inventaris::all();   
        }
        $role = RolePengurus::get();
        return view('pages.inventaris',["inventaris"=>$inventaris,"role"=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $inventaris)
    {
        return view('pages.inventaris');
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
            'nama_inventarisWeb'=>'required',
            'tanggal_inventarisWeb'=>'required',
            'nilai_inventarisWeb'=>'required',
            'asal_inventarisWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);
        $inventaris = new Inventaris();
        $inventaris->role_id = $request->role_idWeb;
        $inventaris->nama_inventaris = $request->nama_inventarisWeb;
        $inventaris->tanggal_perolehan = $request->tanggal_inventarisWeb;
        $inventaris->nilai_perolehan = $request->nilai_inventarisWeb;
        $inventaris->asal_inventaris = $request->asal_inventarisWeb;
        $inventaris->keterangan = $request->keteranganWeb;
        $inventaris->save();

        $inventaris = Inventaris::all();
        return redirect('/datainventaris')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        $inventaris = Inventaris::all();
        return view('pages.inventaris',compact('inventaris'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventaris $inventaris)
    {
        return view('pages.inventaris',compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'nama_inventarisWeb'=>'required',
            'tanggal_inventarisWeb'=>'required',
            'nilai_inventarisWeb'=>'required',
            'asal_inventarisWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);

        $inventaris = Inventaris::Find($request->id);
        $inventaris->role_id = $request->role_idWeb;
        $inventaris->nama_inventaris = $request->nama_inventarisWeb;
        $inventaris->tanggal_perolehan = $request->tanggal_inventarisWeb;
        $inventaris->nilai_perolehan = $request->nilai_inventarisWeb;
        $inventaris->asal_inventaris = $request->asal_inventarisWeb;
        $inventaris->keterangan = $request->keteranganWeb;
        $inventaris->save();
        return redirect('/datainventaris')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
        $inventaris >delete();
        return redirect()->route('/datainventaris')->with('success','Inventaris berhasil dihapus');
    }
     public function delete($id)
     {
         $inventaris = Inventaris::find($id);
         $inventaris->delete();
         return redirect('/datainventaris')->with('success', 'Inventaris berhasil dihapus');
     }
     public function details(Request $request)
     {
         $inventaris = Inventaris::find($request->id);
         $role= RolePengurus::get();
         return view('update.inventarisu',["inventaris"=>$inventaris,"role"=>$role]);
     }
}
