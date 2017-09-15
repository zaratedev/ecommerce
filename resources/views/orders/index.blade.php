@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2>Dashboard</h2>
      </div>
      <div class="panel-body">
        <h3>Estadisticas</h3>
        <div class="row top-space">
          <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
            <span class="">{{$totalMonth}} USD</span>
            Ingresos del mes
          </div>
          <div class="col-xs-4 col-md-3 col-lg-2 sale-data">
            <span class="">{{$totalMonthCount}}</span>
            Números de ventas
          </div>
        </div>
        <h3>Ventas</h3>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td>ID. venta</td>
              <td>Comprador</td>
              <td>Dirección</td>
              <td>No. guia</td>
              <td>Estado</td>
              <td>Fecha de venta</td>
              <td>Acciones</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
              <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->recipient_name}}</td>
                <td>{{$order->address()}}</td>
                <td>
                  <a href="#" data-type="text" data-pk="{{$order->id}}" data-url="{{url('/orders/'.$order->id)}}" data-title="Número de guia" data-value="{{$order->guide_number}}" class="set-guide-number" data-name="guide_number"></a>
                </td>
                <td><a href="#" data-type="select" data-pk="{{$order->id}}" data-url="{{url('/orders/'.$order->id)}}" data-title="Estado" data-value="{{$order->status}}" class="select-status" data-name="status"></a></td>
                <td>{{$order->created_at}}</td>
                <td>Acciones</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
@section('js')
  <link href="{{asset('/plugins/bootstrap-editable/css/bootstrap-editable.css')}}" rel="stylesheet"/>
  <script src="{{asset('/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/orders.js')}}"></script>
@endsection
