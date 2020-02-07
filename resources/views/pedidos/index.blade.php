@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <H1><div class="panel-heading">LISTADO DE PEDIDOS</div></H1>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('pedido.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>CREAR NUEVA ORDEN</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#Pedido</th>
                    <th>Nombre del Cliente</th>
                    <th>Direccion del Cliente</th>
                    <th>Telefono del Cliente</th>
                    <th>Producto</th>
                    <th>Precio del Producto</th>
                    <th>Cantidad Ordenada</th>
                    <th>Total</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pedidoos as $pedidoo)
                  <tr>
                    <td>{{ $pedidoo->id }}</td>
                    <td>{{ $pedidoo->nom_apellido }}</td>
                    <td>{{ $pedidoo->direccion }}</td>
                    <td>{{ $pedidoo->telefono }}</td>
                    <td>{{ $pedidoo->nombre_producto }}</td>
                    <td>{{ $pedidoo->precio }}</td>
                    <td>{{ $pedidoo->cantidad }}</td>
                      <td>{{ $pedidoo->cantidad * $pedidoo->precio }}</td>
                    <td>

                      <a href="{{ route('pedido.delete',['id' => $pedidoo->id])}}" class="btn btn-danger btn-sm">Entregar Orden</a>
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
                  </table>
            </div> 
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
@endsection
