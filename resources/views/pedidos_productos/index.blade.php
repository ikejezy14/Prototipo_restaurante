@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de Pedidos_Productos</div>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('pedido_producto.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>crear</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Cod_pedido</th>
                    <th>Cod_producto</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pedidos_productos as $pedido_producto)
                  <tr>
                    <td>{{ $pedido_producto->id }}</td>
                    <td>{{ $pedido_producto->monto_pedido }}</td>
                    <td>{{ $pedido_producto->nom_producto }}</td>
                    <td>
                      <a href="{{ route('pedido_producto.edit',['id' => $pedido_producto->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('pedido_producto.delete',['id' => $pedido_producto->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
