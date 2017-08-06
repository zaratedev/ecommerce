@extends('layouts.app')

@section('content')
  <div class="container white">
    <h1>Editar producto</h1>
    <!--Formulario-->
    @include('producto.form',['producto' => $producto, 'url' => '/productos/'.$producto->id,  'method' => 'PATCH'])
  </div>
@endsection
