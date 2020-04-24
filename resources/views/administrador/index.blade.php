@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Datos del Administrador
            <a href="administrador/create">
                <button class="btn btn-info fa fa-user-plus">Crear Un nuevo Administrador</button></a></h3>
                @include('administrador.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover ">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Opciones</th>
                </thead>@foreach ($admin as $administrador)<tr>
                    <td>{{ $administrador->id}}</td>
                    <td>{{ $administrador->nombre}}</td>
                    <td>{{ $administrador->documento}}</td>
                    
                    <td>
                        <a href="{{URL::action('AdministradorController@edit',$administrador->id)}}">
                            <button class="btn btn-success"> <span class="glyphicon glyphicon-search"></span> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$administrador->id}}" data-toggle="modal">
                            <button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Eliminar
                            </button></a>
                    </td>
                </tr>

                @include('administrador.modal')
                @endforeach
            </table>
        </div>
        {{$admin->render()}}
    </div>
</div>
@endsection