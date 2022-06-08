<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ControladorClients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Clients::all();
        return view('indexClients', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creaClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
        'Dni_client' => 'required|max:255',
        'Nom_cognoms' => 'required|max:255',
        'Edat' => 'required|max:255',
        'Telefon' => 'required|max:255',
        'Adreca' => 'required|max:255',
        'Ciutat' => 'required|max:255',
        'Pais' => 'required|max:255',
        'Email' => 'required|max:255',
        'Numero_permis_conduccio' => 'required|max:255',
	'Punts_permis_conduccio' => 'required|max:255',
	'Tipus_targeta' => 'required|max:255',
	'Numero_targeta' => 'required|max:255',
        ]);
        $client = Clients::create($nouClient);
        return redirect('/clients')->with('completed', 'Client creat!');
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
        $client = Clients::findOrFail($Dni_client);
        return view('actualitzaClient', compact('client'));
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
        'Nom_cognoms' => 'required|max:255',
        'Edat' => 'required|max:255',
        'Telefon' => 'required|max:255',
        'Adreca' => 'required|max:255',
        'Ciutat' => 'required|max:255',
        'Pais' => 'required|max:255',
        'Email' => 'required|max:255',
        'Numero_permis_conduccio' => 'required|max:255',
        'Punts_permis_conduccio' => 'required|max:255',
        'Tipus_targeta' => 'required|max:255',
        'Numero_targeta' => 'required|max:255',
        ]);
        Clients::whereId($Dni_client)->update($dades);
        return redirect('/clients')->with('completed', 'Client actualitzat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Dni_client)
    {
        $client = Clients::findOrFail($Dni_client);
        $client->delete();
        return redirect('/clients')->with('completed', 'Client esborrat');
    }
}
