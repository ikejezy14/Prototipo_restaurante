@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <div class="panel-heading" style="text-align: center">Registro de Proveedores</div>
              <div class="panel-body">
   <form class="form-horizontal" role="form" method="POST" action="{{ route('proveedor.update',['id' =>$proveedor->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <input type="hidden" name="_method" value="PATCH">
    <div class="box-body">
      <div class="form-group">
        <label for="nom_proveedor" class="col-sm-2 control-label">Nom_proveedor</label>
        <div class="col-sm-10">
          <input type="text" name="nom_proveedor" class="form-control" id="nom_proveedor" value="{{ $proveedor->nom_proveedor}}" placeholder="Nom_proveedor">
        </div>
      </div>  
      <div class="form-group">
        <label for="tel_proveedor" class="col-sm-2 control-label">Tel_proveedor</label>
        <div class="col-sm-10">
          <input type="text" name="tel_proveedor" class="form-control" id="tel_proveedor" value="{{ $proveedor->tel_proveedor}}" placeholder="  tel_proveedor">
        </div>
      </div>  
      <div class="form-group">
       <label for="est_proveedor" class="col-lg-2 control-label">Est_proveedor</label>
       <div class="col-lg-10">
        <label class="radio-inline">
          @if($proveedor->est_proveedor=="activo")
         <input type="radio" name="est_proveedor" id="est_proveedor" value="activo" checked> Activo
         @else
         <input type="radio" name="est_proveedor" id="est_proveedor" value="activo"> Activo
         @endif
        </label>
        <label class="radio-inline">
           @if($proveedor->est_proveedor=="inactivo")
         <input type="radio" name="est_proveedor" id="est_proveedor" value="inactivo" checked> Inactivo
         @else
         <input type="radio" name="est_proveedor" id="est_proveedor" value="inactivo"> Inactivo
          @endif
        </label>
       </div>
      </div>
    <div class="panel-footer">
      <a href="{{ route('proveedor.index') }}" class="btn btn-default btn-sm btn-addon"><i class=""></i>cancelar</a>
      <button type="submit" class="btn btn-info pull-right">actualizar</button>
    </div>
   </form>
  </div>
            
@endsection
