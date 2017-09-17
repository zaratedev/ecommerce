{!! Form::open(['url' => '/in_shopping_carts', 'method' => 'POST', 'class' => 'inline-block add-to-cart']) !!}

<input type="hidden" name="producto_id" value="{{$producto->id}}">
<input type="submit" value="Agregar al carrito" class="btn btn-info">
{!! Form::close() !!}
