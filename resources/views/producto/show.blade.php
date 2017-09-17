@extends('layouts.app')

@section('content')
  <div class="container text-center">
    @include('producto.producto', ['producto' => $producto]);
  </div>
@endsection
