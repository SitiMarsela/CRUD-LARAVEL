<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Agenda;
use App\Models\Kelas;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAgenda = Agenda::all();
        return view('agenda.showtable', compact('dataAgenda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ng = Guru::all();
        $kl = Kelas::all();
        return view('agenda.create', compact('ng','kl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataAgenda = Agenda::create($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/.', $request->file('foto')->getClientOriginalName());
            $dataAgenda->foto = $request->file('foto')->getClientOriginalName();
            $dataAgenda->save();
        }            

        return Redirect('/agenda')->with('success', 'Data Berhasil Ditambahkan');

            


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
        $ng = Guru::all();
        $kl = Kelas::all();
        $agenda = Agenda::findorfail($id);
        return view('agenda.edit', compact('agenda','ng','kl'));
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
        
        $agenda = Agenda::findorfail($id);
        $agenda->update($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/.', $request->file('foto')->getClientOriginalName());
            $agenda->foto = $request->file('foto')->getClientOriginalName();
            $agenda->save();
        }    

        return redirect('/agenda')->with('success', 'Data Berhasil Di Update');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda = Agenda::findorfail($id);
        $agenda->delete();
        return back()->with('destroy', 'Data Ke Destroy');
    }
}
