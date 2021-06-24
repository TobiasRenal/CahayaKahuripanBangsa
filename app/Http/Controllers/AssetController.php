<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $asset = Asset::all();
        return view('pages.asset',compact('asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function createa(array $asset)
    {
        return view('pages.asset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'nama_assetWeb'=>'required',
            'tanggal_assetWeb'=>'required',
            'nilai_perolehanWeb'=>'required',
            'asal_assetWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);
        $asset = new Asset();
        $asset->role_id = $request->role_idWeb;
        $asset->nama_asset = $request->nama_assetWeb;
        $asset->tanggal_perolehan = $request->tanggal_assetWeb;
        $asset->nilai_perolehan = $request->tanggal_assetWeb;
        $asset->asal_asset = $request->asal_assetWeb;
        $asset->keterangan = $request->keteranganWeb;
        $asset->save();

        $asset = Asset::all();
        return redirect('/dataasset')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        $asset = Asset::all();
        return view('pages.asset',compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        return view('pages.asset',compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'nama_assetWeb'=>'required',
            'tanggal_assetWeb'=>'required',
            'nilai_perolehanWeb'=>'required',
            'asal_assetWeb'=>'required',
            'keteranganWeb'=>'required'
        ]);

        Asset::create($request->all());
        return redirect()->route('/dataasset')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset >delete();
        return redirect()->route('/dataasset')->with('success','Asset berhasil dihapus');
    }
     public function delete($id)
     {
         $asset = Asset::find($id);
         $asset->delete();
         return redirect('/dataasset')->with('success', 'Asset berhasil dihapus');
     }
}
