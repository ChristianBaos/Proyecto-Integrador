@extends ('layouts.layout')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Administrador</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'administrador','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
        </div>
        <div class="form-group">
            <label for="descripcion">Documento</label>
                <input type="text"name="documento"class="form-control"placeholder="Documento...">
    </div>
        <div class="form-group">
            <label for="descripcion">Password</label>
                <input type="password"name="password"class="form-control"placeholder="******">
    </div>
    <div class="form-group">
        <button class="btn btn-info"type="submit">Guardar</button>
            <button class="btn btn-danger"type="reset">Cancelar</button>
            <a href="{{route('administrador.index')}}" class="btn btn-success">Volver</a>
            
            
</div>{!!Form::close()!!}</div>
</div>@endsection