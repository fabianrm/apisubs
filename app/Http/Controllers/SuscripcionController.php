<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;

class SuscripcionController extends Controller
{
    // Listar todas las suscripciones
    public function index()
    {
        $suscripciones = Suscripcion::all();
        return response()->json($suscripciones);
    }

    // Crear una nueva suscripción
    public function store(Request $request)
    {
        $suscripcion = Suscripcion::create($request->all());
        return response()->json($suscripcion, 201);
    }

    // Mostrar una suscripción por ID
    public function show($id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        return response()->json($suscripcion);
    }

    // Actualizar una suscripción por ID
    public function update(Request $request, $id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->update($request->all());
        return response()->json($suscripcion, 200);
    }

    // Eliminar una suscripción por ID
    public function destroy($id)
    {
        $suscripcion = Suscripcion::findOrFail($id);
        $suscripcion->delete();
        return response()->json(null, 204);
    }
}
