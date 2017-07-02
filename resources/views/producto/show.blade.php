@extends('layouts.app')

@section('content')
  <div class="container text-center">

    <div class="card product text-left">
      @if(Auth::check() && $producto->user_id == Auth::user()->id)
      <div class="absolute actions">
        <a href="{{url('/productos/'.$producto->id.'/edit')}}">
          Editar
        </a>
        @include('producto.delete',['producto' => $producto])
      </div>
      @endif
      <h1>{{ $producto->title }}</h1>
      <div class="row">
        <div class="col-sm-6 col-lg-12">

        </div>
        <div class="col-sm-6 col-lg-12">
          <p><strong>Descripción</strong></p>
          <p>{{$producto->description}}</p>
          <p><a href="#" class="btn btn-success">Agregar al carrito</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection
