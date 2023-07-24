<?php

namespace App\Http\Controllers;


use App\Models\Perro;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    public function index()
    {
        $perros = PErro::all();
        return view('perros.index', compact('perros'));
    }

    public function create()
    {
        return view('perros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'foto_url' => 'required',
            'descripcion' => 'required'
        ]);

        $perro->update($request->all());
        return redirect()->route('perros.index')->with('success', 'Perro actualizado');
    }

    public function destroy(Perro $perro)
    {
        $perro->delete();
        return redirect()->route('perros.index')->with('success', 'Prro eliminado');
    }
}
