<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::get();
        return view('equipos', compact('equipos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('equipos.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $equipo = new Equipo;
       $equipo->nombre= $request ->nombre;
       $equipo->tipo= $request ->tipo;
       $equipo->marca= $request ->marca;
       $equipo->numero_serie= $request ->numero_serie;
       $equipo->modelo= $request ->modelo;
       $equipo->fecha_adquisicion= $request ->fecha_adquisicion;
       $equipo->estado= $request ->estado;
       $equipo->ubicacion= $request ->ubicacion;
       $equipo->save();

       return Redirect::to('equipos');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Equipo::find($id);
        return view ('equipos.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Equipo::find($id);
        $item->nombre= $request ->nombre;
        $item->tipo= $request ->tipo;
        $item->save();

        return Redirect::to('equipos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Equipo::find($id)->delete();
        return Redirect::to('equipos');

    }
}
