@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de Clientes</div>
              <div class="panel-body">
                <a href="{{ route('cliente.create') }}" class="btn btn-sm btn-success btn-sm-2">Crear</a>
                
               <div class="box"><br>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nombre</th>
                    <th>Ape_paterno</th>
                    <th>Ape-materno</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($clientes as $cliente)
                  <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->ape_paterno }}</td>
                    <td>{{ $cliente->ape_materno }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>
                      <a href="{{ route('cliente.edit',['id' => $cliente->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('cliente.delete',['id' => $cliente->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
                      
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
