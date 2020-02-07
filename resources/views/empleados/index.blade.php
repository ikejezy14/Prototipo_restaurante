@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de empleados</div>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('empleado.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>crear</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Cod_local</th>
                    <th>Nom_empleado</th>
                    <th>Cargo_empleado</th>
                    <th>Est_empleado</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($empleados as $empleado)
                  <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nom_local }}</td>
                    <td>{{ $empleado->nom_empleado }}</td>
                    <td>{{ $empleado->cargo_empleado }}</td>
                    <td>{{ $empleado->est_empleado }}</td>
                    <td>
                      <a href="{{ route('empleado.edit',['id' => $empleado->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('empleado.delete',['id' => $empleado->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
