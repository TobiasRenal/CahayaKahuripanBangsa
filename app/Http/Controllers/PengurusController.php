<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\RolePengurus;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $pengurus = \App\Models\Pengurus::where('nama_pengurus','LIKE','%'.$request->cari.'%')->get();
        }else{
            $pengurus = Pengurus::all();
        }
        $role = RolePengurus::get();
        return view('pages.organisasi',["pengurus"=>$pengurus,"role"=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(array $pengurus)
    {
        return view('pages.organisasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'nama_pengurusWeb'=>'required',
            'tempat_lahirWeb'=>'required',
            'tanggal_lahirWeb'=>'required',
            'alamatWeb'=>'required',
            'no_teleponWeb'=>'required',
        ]);
        $pengurus = new Pengurus();
        $pengurus->role_id = $request->role_idWeb;
        $pengurus->nama_pengurus = $request->nama_pengurusWeb;
        $pengurus->tempat_lahir = $request->tempat_lahirWeb;
        $pengurus->tanggal_lahir = $request->tanggal_lahirWeb;
        $pengurus->alamat = $request->alamatWeb;
        $pengurus->no_telepon = $request->no_teleponWeb;
        $pengurus->save();

        $pgrs = Pengurus::all();
        return redirect('/datapengurus')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        $pengurus = Pengurus::all();
        return view('pages.organisasi',compact('pengurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus)
    {
        return view('pages.organisasi',compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'nama_pengurusWeb'=>'required',
            'tempat_lahirWeb'=>'required',
            'tanggal_lahirWeb'=>'required',
            'alamatWeb'=>'required',
            'no_teleponWeb'=>'required',
        ]);

        $pengurus = Pengurus::find($request->id);
        $pengurus->role_id = $request->role_idWeb;
        $pengurus->nama_pengurus = $request->nama_pengurusWeb;
        $pengurus->tempat_lahir = $request->tempat_lahirWeb;
        $pengurus->tanggal_lahir = $request->tanggal_lahirWeb;
        $pengurus->alamat = $request->alamatWeb;
        $pengurus->no_telepon = $request->no_teleponWeb;
        $pengurus->save();
        return redirect('/datapengurus')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus)
    {
        $pengurus >delete();
        return redirect()->route('/datapengurus')->with('success','Pengurus berhasil dihapus');
    }
     public function delete($id)
     {
         $pengurus = Pengurus::find($id);
         $pengurus->delete();
         return redirect('/datapengurus')->with('success', 'Pengurus berhasil dihapus');
     }
     public function details(Request $request)
     {
         $pengurus = Pengurus::find($request->id);
         $role = RolePengurus::get();
         return view('update.organisasiu',["pengurus"=>$pengurus,"role"=>$role]);
     }
}
