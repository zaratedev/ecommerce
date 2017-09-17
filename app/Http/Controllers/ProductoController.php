<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => 'show']);
  }

  public function index()
  {
    $productos = Producto::all();
    return view('producto.index', compact('productos'));
  }

  public function create()
  {
    $producto = new Producto;
    return view('producto.create', compact('producto'));
  }

  public function store(Request $request)
  {
    $hasFile = $request->hasFile('cover') && $request->cover->isValid();
    $producto = new Producto;

    $producto->title = $request->title;
    $producto->description = $request->description;
    $producto->pricing = $request->pricing;
    $producto->user_id = \Auth::user()->id;

    if ($hasFile) {
      $extension = $request->cover->extension();
      $producto->extension = $extension;
    }
    if ($producto->save()) {
      if ($hasFile) {
        $request->cover->storeAs('images',"$producto->id.$extension");
      }
      return redirect("/productos");
    }else {
      return view("producto.create",compact('producto'));
    }
  }

  public function edit($id)
  {
    $producto = Producto::find($id);
    return view('producto.edit', compact('producto'));
  }

  public function update(Request $request, $id)
  {
    $producto = Producto::find($id);

    $producto->title = $request->title;
    $producto->description = $request->description;
    $producto->pricing = $request->pricing;
    $producto->user_id = \Auth::user()->id;

    if ($producto->save()) {
      return redirect("/productos");
    }else {
      return view("producto.edit",compact('producto'));
    }
  }

  public function destroy($id) {
    Producto::destroy($id);
    return redirect('/productos');
  }

  public function show($id)
  {
    $producto = Producto::find($id);

    return view('producto.show',compact('producto'));
  }
}
