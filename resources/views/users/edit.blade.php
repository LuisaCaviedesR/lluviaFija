@extends ('layouts.home')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Usuario</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                 <!--Mensajes de error en validación de campos-->
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                {!! Form::model($data, [
                                    'method' => 'PUT',
                                    'route' => ['users.update', $data->id]
                                ]) !!}
                                    <div class="form-group">
                                      {!! Form::label('rol_id', 'Rol', ['class' => 'control-label']) !!}
                                      {{ Form::select('rol_id', $listRol, null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombres', ['class' => 'control-label']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('lastname', 'Apellidos', ['class' => 'control-label']) !!}
                                        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                    </div>
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                    <a class="btn btn-default" href="{{ route('users.index') }}" role="button">Cancelar</a>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@stop
