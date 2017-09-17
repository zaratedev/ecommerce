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
    <div class="col-sm-6 col-xs-12">
      @if ($producto->extension)
        <img src="{{ url("/producto/images/$producto->id.$producto->extension")}}" class="producto-avatar" alt="">
      @endif
    </div>
    <div class="col-sm-6 col-xs-12">
      <p><strong>Descripción</strong></p>
      <p>{{$producto->description}}</p>
      <p>
        @include('in_shopping_carts.form',['producto' => $producto])
      </p>
    </div>
  </div>
</div>
