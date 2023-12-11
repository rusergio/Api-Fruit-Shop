<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listarProducto()
    {
        return Producto::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function agregarProducto(Request $request)
    {
        // función para guardar
        $inputs = $request->input();
        $p = Producto::create($inputs);
        return response()->json([
            'data' => $p,
            'mensaje' => "Producto registrado con éxito!",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // función para actualizar estudiante
        $p = Producto::find($id);
        if(isset($p)){
            $p->nombre = $request->nombre;
            $p->precio = $request->precio;
            $p->imagen = $request->imagen;
            if($p->save()){
                return response()->json([
                    'data'=>$p,
                    'mensaje'=>"Producto actualizado con éxito!",
                ]);
            }

        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>"El producto no fue actualizado!",
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function buscarProducto($id)
    {
        $producto = Producto::find($id);

        if ($producto) {
            return response()->json($producto);
        } else {
            return response()->json(['mensaje' => 'El producto no existe'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Producto eliminado correctamente'], 200);
    }
    
}
