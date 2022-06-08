<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autos;

class ControladorAutos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Autos::all();
	return view('indexAutos', compact('auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creaAuto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouAuto = $request->validate([
	'Matricula_auto' => 'required|max:255',
	'Numero_bastidor' => 'required|max:255',
	'Marca' => 'required|max:255',
        'Model' => 'required|max:255',
        'Color' => 'required|max:255',
        'Nombre_places' => 'required|max:255',
        'Nombre_portes' => 'required|max:255',
        'Grandaria_maleter' => 'required|max:255',
        'Tipus_combustible' => 'required|max:255',
        ]);
        $auto = Autos::create($nouAuto);
        return redirect('/autos')->with('completed', 'Auto creat!');
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
        $auto = Autos::findOrFail($id);
        return view('actualitzaAuto', compact('auto'));
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
        $dades = $request->validate([
        'Matricula_auto' => 'required|max:255',
        'Numero_bastidor' => 'required|max:255',
        'Marca' => 'required|max:255',
        'Model' => 'required|max:255',
        'Color' => 'required|max:255',
        'Nombre_places' => 'required|max:255',
        'Nombre_portes' => 'required|max:255',
        'Grandaria_maleter' => 'required|max:255',
        'Tipus_combustible' => 'required|max:255',
        ]);
        Autos::whereId($id)->update($dades);
        return redirect('/autos')->with('completed', 'Auto actualitzat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Autos::findOrFail($id);
	$auto->delete();
	return redirect('/autos')->with('completed', 'Auto esborrat');
    }
}
