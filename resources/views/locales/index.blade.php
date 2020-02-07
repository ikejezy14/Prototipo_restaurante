@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading">listado de locales</div>
              <div class="panel-body">
  <div class="box">
            <a href="{{ route('local.create') }}" class="btn btn-sm btn-success btn-addon"><i class="glyphicom glyphicom-plus"></i>crear</a>
            <!-- /.box-header -->
            <div class="box-body"><br/>
              <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Nom_local</th>
                    <th>Dir_local</th>
                    <th style="width: 150px">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($locales as $local)
                  <tr>
                    <td>{{ $local->id }}</td>
                    <td>{{ $local->nom_local }}</td>
                    <td>{{ $local->dir_local }}</td>
                    <td>
                      <a href="{{ route('local.edit',['id' => $local->id]) }}" class="btn btn-info btn-sm">Editar</a>
                      <a href="{{ route('local.delete',['id' => $local->id])}}" class="btn btn-danger btn-sm">Eliminar</a>
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
