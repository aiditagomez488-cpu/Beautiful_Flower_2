<?php

namespace App\Http\Controllers;

use App\Models\Flor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FlorController extends Controller
{
    // Consultar todos los registros
    public function index()
    {
        $flores = Flor::latest()->get();
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
        $validated = $request->validate([
            'nombre'      => 'required|string|max:255',
            'color'       => 'required|string|max:255',
            'temporada'   => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'imagen'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('flores', 'public');
        }

        Flor::create($validated);

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
        $validated = $request->validate([
            'nombre'      => 'required|string|max:255',
            'color'       => 'required|string|max:255',
            'temporada'   => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'imagen'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            if ($flor->imagen && Storage::disk('public')->exists($flor->imagen)) {
                Storage::disk('public')->delete($flor->imagen);
            }
            $validated['imagen'] = $request->file('imagen')->store('flores', 'public');
        }

        $flor->update($validated);

        return redirect()->route('flores.index')->with('success', 'Flor actualizada correctamente.');
    }

    // Eliminar registro
    public function destroy(Flor $flor)
    {
        if ($flor->imagen && Storage::disk('public')->exists($flor->imagen)) {
            Storage::disk('public')->delete($flor->imagen);
        }

        $flor->delete();

        return redirect()->route('flores.index')->with('success', 'Flor eliminada correctamente.');
    }
}