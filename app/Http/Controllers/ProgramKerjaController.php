<?php

namespace App\Http\Controllers;

use App\Models\ProgramKerja;
use Illuminate\Http\Request;

class ProgramKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $proker = ProgramKerja::all();
        return view('pages.proker',compact('proker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
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
            'role_idWeb'=>'required',
            'NamaProgramWeb'=>'required',
            'BudgetWeb'=>'required',
            'PencapaianWeb'=>'required',
            'KendalaWeb'=>'required',
        ]);
        $proker = new Pengurus();
        $proker->role_id = $request->role_idWeb;
        $proker->nama_program = $request->NamaProgramWebs;
        $proker->besar_anggaran = $request->BudgetWeb;
        $proker->pencapaian = $request->PencapaianWeb;
        $proker->kendala = $request->KendalaWeb;
        $proker->save();

        $pgrs = ProgramKerja::all();
        return redirect('/dataproker')->with('success','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
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
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'role_idWeb'=>'required',
            'NamaProgramWeb'=>'required',
            'BudgetWeb'=>'required',
            'PencapaianWeb'=>'required',
            'KendalaWeb'=>'required',
        ]);

        ProgramKerja::create($request->all());
        return redirect()->route('/dataproker')->with('success');
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
        $proker = ProgramKerja::find($id);
        $proker->delete();

        return redirect('/dataproker')->with('success', 'Pengurus berhasil dihapus');
    }
}
