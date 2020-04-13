@extends('layouts.layout')
@section('contenido')
<div class="row">
   
        <div class="col-md-6 col-md-offset-2">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Error!</strong>Reviselos campos obligatorios.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        {{Form::Open(array('action'=>array('UsuarioController@update',$usuario->id),'method'=>'patch'))}}

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre..."
                            value="{{$usuario->nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido..."
                            value="{{$usuario->apellido}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Documento</label>
                            <input type="text" name="documento" class="form-control" placeholder="Documento..."
                            value="{{$usuario->documento}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Telefono</label>
                            <input type="text" name="telefono" class="form-control" placeholder="Telefono..."
                            value="{{$usuario->telefono}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                            <a href="{{route('usuario.index')}}" class="btn btn-success">Volver</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
            </div>{!!Form::close()!!}</div>
</div>@endsection