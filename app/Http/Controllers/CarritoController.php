<?php

namespace App\Http\Controllers;
use App\Models\Carrito;

use Illuminate\Http\Request;

class CarritoController extends Controller
{   
    // funcion para listar productos en el carrito
    public function listarProductoCarrito()
    {
        return Carrito::all();
    }

    // funcion para agregar un producto al carrito
    public function agregarAlCarrito(Request $request)
    {
        $producto = new Carrito();
        $producto->cantidad_pedido = $request->input('cantidad_pedido');
        $producto->producto_seleccionado = $request->input('producto_seleccionado');
        $producto->precio = $request->input('precio');
        $producto->save();
        
        // Puedes realizar otras acciones después de agregar el producto al carrito
        
        return response()->json(['message' => 'Producto agregado al carrito']);
    }
    
    // funcion para eliminar un producto del carrito
    public function eliminarDelCarrito($id)
    {
        $producto = Carrito::find($id);
        
        if ($producto) {
            $producto->delete();
            
            // Puedes realizar otras acciones después de eliminar el producto del carrito
            
            return response()->json(['message' => 'Producto eliminado del carrito']);
        }
        
        return response()->json(['message' => 'Producto no encontrado en el carrito'], 404);
    }
    
    // Vaciar el carrito
    public function vaciarCarrito()
    {
        Carrito::truncate();
        
        // Puedes realizar otras acciones después de vaciar el carrito
        
        return response()->json(['message' => 'Carrito vaciado']);
    }
    
    // Mostrar productos en el carrito
    public function mostrarProductos()
    {
        $productos = Carrito::all();
        
        // Puedes realizar otras acciones antes de mostrar los productos en el carrito
        
        return response()->json($productos);
    }
}
