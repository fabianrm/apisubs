<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    // Listar todos los métodos de pago
    public function index()
    {
        $metodoPagos = MetodoPago::all();
        return response()->json($metodoPagos);
    }

    // Crear un nuevo método de pago
    public function store(Request $request)
    {
        $metodoPago = MetodoPago::create($request->all());
        return response()->json($metodoPago, 201);
    }

    // Mostrar un método de pago por ID
    public function show($id)
    {
        $metodoPago = MetodoPago::findOrFail($id);
        return response()->json($metodoPago);
    }

    // Actualizar un método de pago por ID
    public function update(Request $request, $id)
    {
        $metodoPago = MetodoPago::findOrFail($id);
        $metodoPago->update($request->all());
        return response()->json($metodoPago, 200);
    }

    // Eliminar un método de pago por ID
    public function destroy($id)
    {
        $metodoPago = MetodoPago::findOrFail($id);
        $metodoPago->delete();
        return response()->json(null, 204);
    }
}
