<?php
namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Licencia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $equipos = Equipo::all();
        $licencias = Licencia::all();
        return view('dashboard', compact('equipos', 'licencias'));
       
    }



}


