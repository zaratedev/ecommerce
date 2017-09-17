@extends('layouts.app')

@section('title','Productos Programacion JJE')

@section('content')
  <div class="text-center productos-container">
    <div class="row">
      @foreach ($productos as $producto)
        <div class="col-xs-10 col-sm-6">
          @include('producto.producto', ['producto' => $producto])
        </div>
      @endforeach
    </div>

    <div class="">
      {{ $productos->links()}}
    </div>
  </div>

@endsection
@section('js')
  <script type="text/javascript" src="{{asset('js/carrito.js')}}"></script>
@endsection
