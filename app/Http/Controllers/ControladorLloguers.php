<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lloguer;

class ControladorLloguers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lloguer = Lloguer::all();
        return view('indexLloguers', compact('lloguer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creaLloguer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouLloguer = $request->validate([
        'Dni_client' => 'required|max:255',
        'Matricula_auto' => 'required|max:255',
        'Data_prestec' => 'required|max:255',
        'Data_devolucio' => 'required|max:255',
        'Lloc_devolucio' => 'required|max:255',
        'Preu_dia' => 'required|max:255',
        'Prestec_retorn_diposit_ple' => 'required|max:255',
        'Tipus_assegunanca' => 'required|max:255',
        ]);
        $lloguer = Lloguer::create($nouLloguer);
        return redirect('/lloguers')->with('completed', 'Lloguer creat!');
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
    public function edit($Dni_client)
    {
        $lloguer = Lloguer::findOrFail($Dni_client);
        return view('actualitzaLloguer', compact('lloguer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Dni_client)
    {
        $dades = $request->validate([
        'Dni_client' => 'required|max:255',
        'Matricula_auto' => 'required|max:255',
        'Data_prestec' => 'required|max:255',
        'Data_devolucio' => 'required|max:255',
        'Lloc_devolucio' => 'required|max:255',
        'Preu_dia' => 'required|max:255',
        'Prestec_retorn_diposit_ple' => 'required|max:255',
        'Tipus_assegunanca' => 'required|max:255',
	]);
        Lloguer::whereId($Dni_client)->update($dades);
        return redirect('/lloguers')->with('completed', 'Lloguer actualitzat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Dni_client)
    {
        $lloguer = Lloguer::findOrFail($Dni_client	);
        $lloguer->delete();
        return redirect('/lloguers')->with('completed', 'Lloguer esborrat');
    }
}
