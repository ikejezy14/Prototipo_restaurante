@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <h1><div class="panel-heading">LISTADO DE PRODUCTOS</div></h1>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('producto.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>Agregar Nuevo Producto</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre del Producto</th>
                    <th>Precio del Producto</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($productoos as $productoo)
                  <tr>
                    <td>{{ $productoo->id }}</td>
                    <td>{{ $productoo->nombre_producto }}</td>
                    <td>{{ $productoo->precio }}</td>
                    <td>
                      <a href="{{ route('producto.edit',['id' => $productoo->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('producto.delete',['id' => $productoo->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
