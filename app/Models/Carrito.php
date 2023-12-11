<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    // modelo carrito
    public $table = "carritos"; 
    protected $fillable = ['cantidad_pedido', 'producto_seleccionado', 'precio'];
}
