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

  public function create()
  {
    return view('producto.create');
  }

  public function store(Request $request)
  {
    $producto = new Producto;

    $producto->title = $request->title;
    $producto->description = $request->description;
    $producto->pricing = $request->pricing;
    $producto->user_id = \Auth::user()->id;

    if ($producto->save()) {
      return redirect("/productos");
    }else {
      return view("producto.create");
    }
  }
}
