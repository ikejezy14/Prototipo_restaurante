@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de Proveedores</div>
              <div class="panel-body">
  <div class="box">

            <a href="{{ route('proveedor.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>crear</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom_proveedor</th>
                    <th>Tel_proveedor</th>
                    <th>Est_proveedor</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($proveedores as $proveedor)
                  <tr>
                    <td>{{ $proveedor->id }}</td>
                    <td>{{ $proveedor->nom_proveedor }}</td>
                    <td>{{ $proveedor->tel_proveedor }}</td>
                    <td>{{ $proveedor->est_proveedor }}</td>
                    <td>
                      <a href="{{ route('proveedor.edit',['id' => $proveedor->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('proveedor.delete',['id' => $proveedor->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
