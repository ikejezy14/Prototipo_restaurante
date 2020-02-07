@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de Categorias</div>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('categoria.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>crear</a>
            <!-- /.box-header -->
            <div class="box-body"><br>
              <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom_categoria</th>
                    <th>Abrev_categoria</th>
                    <th>Est_categoria</th>
                    <th>Desc_categoria</th>
                    <th style="width: 150px">opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categorias as $categoria)
                  <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nom_categoria }}</td>
                    <td>{{ $categoria->abrev_categoria }}</td>
                    <td>{{ $categoria->est_categoria }}</td>
                    <td>{{ $categoria->desc_categoria }}</td>
                    <td>
                      <a href="{{ route('categoria.edit',['id' => $categoria->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('categoria.delete',['id' => $categoria->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
