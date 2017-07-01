@extends('layouts.app')

@section('content')
  <div class="big-padding text-center blue-grey white-text">
    <h1>Productos</h1>
  </div>
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Titulo</td>
          <td>Descripción</td>
          <td>Precio</td>
          <td>Acciones</td>
        </tr>
      </thead>
      <tbody>
        @foreach($productos as $producto)
        <tr>
          <td>{{ $producto->id }}</td>
          <td>{{ $producto->title }}</td>
          <td>{{ $producto->description }}</td>
          <td>{{ $producto->pricing }}</td>
          <td>Acciones</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
