<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Equipo;   // Importa el modelo Equipo


class LicenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $licencias = Licencia::when($search, function ($query, $search) {
            return $query->where('software', 'like', "%{$search}%")
                         ->orWhere('numero_licencia', 'like', "%{$search}%");
        })->get();
    
        return view('licencias', compact('licencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('licencias.create', compact('equipos'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $licencia = new Licencia;
        $licencia->software = $request->software;
        $licencia->numero_licencia = $request->numero_licencia;
        $licencia->fecha_adquisicion = $request->fecha_adquisicion;
        $licencia->fecha_expiracion = $request->fecha_expiracion;
        $licencia->equipo_id = $request->equipo_id; 
        $licencia->save();
        
        // Asociar los equipos seleccionados a la licencia
        $licencia->equipos()->attach($request->equipos);
        return Redirect::to('licencias');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $licencia = Licencia::with('equipos')->findOrFail($id);
        $equipos = Equipo::all();
        return view('licencias.show', compact('licencia', 'equipos'));
    }

  

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $licencia = Licencia::find($id);
        $licencia->software = $request->software;
        $licencia->numero_licencia = $request->numero_licencia;
        $licencia->fecha_adquisicion = $request->fecha_adquisicion;
        $licencia->fecha_expiracion = $request->fecha_expiracion;
        $licencia->save();

        // Actualizar los equipos asociados a la licencia
        $licencia->equipos()->sync($request->equipos);

        return Redirect::to('licencias');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Licencia::find($id)->delete();
        return Redirect::to('licencias');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}