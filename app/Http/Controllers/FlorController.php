<?php

namespace App\Http\Controllers;

use App\Models\Flor;
use Illuminate\Http\Request;

class FlorController extends Controller
{
    // Consultar todos los registros
    public function index()
    {
        $flores = Flor::all();
        return view('flores.index', compact('flores'));
    }

    // Consultar un registro individual
    public function show(Flor $flor)
    {
        return view('flores.show', compact('flor'));
    }

    // Mostrar formulario para crear
    public function create()
    {
        return view('flores.create');
    }

    // Guardar nuevo registro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'color' => 'required',
            'temporada' => 'required',
        ]);

        Flor::create($request->only(['nombre', 'color', 'temporada', 'descripcion']));
        return redirect()->route('flores.index')->with('success', 'Flor agregada correctamente.');
    }

    // Mostrar formulario para editar
    public function edit(Flor $flor)
    {
        return view('flores.edit', compact('flor'));
    }

    // Actualizar registro
    public function update(Request $request, Flor $flor)
    {
        $request->validate([
            'nombre' => 'required',
            'color' => 'required',
            'temporada' => 'required',
        ]);

        $flor->update($request->all());
        return redirect()->route('flores.index')->with('success', 'Flor actualizada correctamente.');
    }

    // Eliminar registro
    public function destroy(Flor $flor)
    {
        $flor->delete();
        return redirect()->route('flores.index')->with('success', 'Flor eliminada correctamente.');
    }
}