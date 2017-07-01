<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{
  public function index()
  {
    $productos = Producto::all();
    return view('producto.index', compact('productos'));
  }
}
