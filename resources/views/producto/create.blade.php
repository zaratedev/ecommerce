@extends('layouts.app')

@section('content')
  <div class="container white">
    <h1>Nuevo producto</h1>
    <!--Formulario-->
    {!! Form::open(['url' => '/productos', 'method' => 'POST']) !!}
      <div class="form-group">
        {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Titulo..']) }}
      </div>

      <div class="form-group">
        {{ Form::number('pricing','',['class' => 'form-control', 'placeholder' => 'Introduce el precio de tu producto en dolares']) }}
      </div>

      <div class="form-group">
        {{ Form::textarea('description','',['class' => 'form-control', 'placeholder' => 'Descripcion...']) }}
      </div>

      <div class="form-group text-rigth">
        <a href="{{ url('/productos') }}">Regresar a todos los productos</a>
        <input type="submit" value="Registrar" class="btn btn-success">
      </div>
    {!! Form::close() !!}
  </div>
@endsection
