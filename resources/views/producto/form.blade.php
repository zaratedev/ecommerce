{!! Form::open(['url' => $url, 'method' => $method]) !!}
  <div class="form-group">
    {{ Form::text('title',$producto->title,['class' => 'form-control', 'placeholder' => 'Titulo..']) }}
  </div>

  <div class="form-group">
    {{ Form::number('pricing',$producto->pricing,['class' => 'form-control', 'placeholder' => 'Introduce el precio de tu producto en dolares']) }}
  </div>

  <div class="form-group">
    {{ Form::textarea('description',$producto->description,['class' => 'form-control', 'placeholder' => 'Descripcion...']) }}
  </div>

  <div class="form-group text-right">
    <a href="{{ url('/productos') }}">Regresar a todos los productos</a>
    <input type="submit" value="Enviar" class="btn btn-success">
  </div>
{!! Form::close() !!}
