<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::all();
        return response()->json($ventas);
    }

    public function show($id)
    {
        $venta = Venta::find($id);
        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        return response()->json($venta);
    }

    public function store(Request $request)
    {
        $venta = new Venta();
        $venta->cliente_id = $request->input('cliente_id');
        $venta->empleado_id = $request->input('empleado_id');
        $venta->producto_id = $request->input('producto_id');
        $venta->cantidad = $request->input('cantidad');
        $venta->save();
        return response()->json($venta, 201);
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::find($id);
        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        $venta->cliente_id = $request->input('cliente_id');
        $venta->empleado_id = $request->input('empleado_id');
        $venta->producto_id = $request->input('producto_id');
        $venta->cantidad = $request->input('cantidad');
        $venta->save();
        return response()->json($venta);
    }

    public function destroy($id)
    {
        $venta = Venta::find($id);
        if (!$venta) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        $venta->delete();
        return response()->json(['message' => 'Venta eliminada']);
    }
}