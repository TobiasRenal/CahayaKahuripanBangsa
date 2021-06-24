<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;
use App\Models\RolePengurus;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $proker = \App\Models\ProgramKerja::where('nama_program','LIKE','%'.$request->cari.'%')->get();
        }else{
            $proker = ProgramKerja::all();
        }
        $role = RolePengurus::get();
        return view('pages.proker',["proker"=>$proker,"role"=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(array $proker)
    {
        return view('pages.proker');
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
            'roleidWeb'=>'required',
            'NamaProgramWebs'=>'required',
            'BudgetWeb'=>'required',
            'PencapaianWeb'=>'required',
            'KendalaWeb'=>'required',
        ]);
        $proker = new ProgramKerja();
        $proker->role_id = $request->roleidWeb;
        $proker->nama_program = $request->NamaProgramWebs;
        $proker->besar_anggaran = $request->BudgetWeb;
        $proker->pencapaian = $request->PencapaianWeb;
        $proker->kendala = $request->KendalaWeb;
        $proker->save();

        $prk = ProgramKerja::all();
        // $role = RolePengurus::get();
        return redirect('/dataproker')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(ProgramKerja $proker)
    {
        $proker = ProgramKerja::all();
        return view('pages.proker',compact('proker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(ProgramKerja $proker)
    {
        return view('pages.proker',compact('proker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'roleidWeb'=>'required',
            'NamaProgramWebs'=>'required',
            'BudgetWeb'=>'required',
            'PencapaianWeb'=>'required',
            'KendalaWeb'=>'required',
        ]);
        $proker = ProgramKerja::find($request->id);
        $proker->role_id = $request->roleidWeb;
        $proker->nama_program = $request->NamaProgramWebs;
        $proker->besar_anggaran = $request->BudgetWeb;
        $proker->pencapaian = $request->PencapaianWeb;
        $proker->kendala = $request->KendalaWeb;
        $proker->save();
        return redirect('/dataproker')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ProgramKerja $proker)
    {
        $proker >delete();
        return redirect()->route('/dataproker')->with('success','Program kerja berhasil dihapus');
    }
    public function delete($id)
    {
        $proker = ProgramKerja::find($id);
        $proker->delete();

        return redirect('/dataproker')->with('success', 'Program kerja berhasil dihapus');
    }
    public function details(Request $request)
     {
         $proker = ProgramKerja::find($request->id);
         $role = RolePengurus::get();
         return view('update.prokeru',["proker"=>$proker,"role"=>$role]);
     }
}
