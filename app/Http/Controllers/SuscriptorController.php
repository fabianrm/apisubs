<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suscriptor;

class SuscriptorController extends Controller
{
    // Listar todos los suscriptores
    public function index()
    {
        $suscriptores = Suscriptor::all();
        return response()->json($suscriptores);
    }

    // Crear un nuevo suscriptor
    public function store(Request $request)
    {
        $suscriptor = Suscriptor::create($request->all());
        return response()->json($suscriptor, 201);
    }

    // Mostrar un suscriptor por ID
    public function show($id)
    {
        $suscriptor = Suscriptor::findOrFail($id);
        return response()->json($suscriptor);
    }

    // Actualizar un suscriptor por ID
    public function update(Request $request, $id)
    {
        $suscriptor = Suscriptor::findOrFail($id);
        $suscriptor->update($request->all());
        return response()->json($suscriptor, 200);
    }

    // Eliminar un suscriptor por ID
    public function destroy($id)
    {
        $suscriptor = Suscriptor::findOrFail($id);
        $suscriptor->delete();
        return response()->json(null, 204);
    }
}
