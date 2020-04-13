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

        {{Form::Open(array('action'=>array('AdministradorController@update',$administrador->id),'method'=>'patch'))}}

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <div class="form-group">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre..."
                            value="{{$administrador->nombre}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Documento</label>
                            <input type="text" name="documento" class="form-control" placeholder="Documento..."
                            value="{{$administrador->documento}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="*****"
                            value="{{$administrador->password}}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Guardar</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>
                            <a href="{{route('administrador.index')}}" class="btn btn-success">Volver</a>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 
            </div>{!!Form::close()!!}</div>
</div>@endsection