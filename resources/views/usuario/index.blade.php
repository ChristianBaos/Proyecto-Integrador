@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Usuarios
            <a href="usuario/create">
                <button class="btn btn-info ">Ingresar Nuevo Usuario</button></a></h3>
                @include('usuario.search')

    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover ">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Documento</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </thead>@foreach ($usuarios as $usuario)<tr>
                    <td>{{ $usuario->id}}</td>
                    <td>{{ $usuario->nombre}}</td>
                    <td>{{ $usuario->apellido}}</td>
                    <td>{{ $usuario->documento}}</td>
                    <td>{{ $usuario->telefono}}</td>
                    <td>
                    
                    
                        <a href="{{URL::action('UsuarioController@edit',$usuario->id)}}">
                            <button class="btn btn-success"> <span class="glyphicon glyphicon-search"></span> Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal">
                            <button class="btn btn-danger"> <span class="glyphicon glyphicon-trash"></span> Eliminar
                            </button></a>
                    </td>
                </tr>
                
                @include('usuario.modal')
                
                
                @endforeach
            </table>
        </div>
        {{$usuarios->render()}}
    </div>
</div>
@endsection