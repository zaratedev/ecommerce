@extends('layouts.app')

@section('content')
  <div class="container white">
    <h1>Nuevo producto</h1>
    <!--Formulario-->
    @include('producto.form',['producto' => $producto, 'url' => '/productos', 'method' => 'POST'])
  </div>
@endsection
