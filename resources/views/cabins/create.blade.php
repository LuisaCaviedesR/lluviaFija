@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Cabañas</div>
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
                                {!! Form::open(['route' => 'cabins.store']) !!}          	      
                                    <div class="form-group">
                                        {!! Form::label('cabin_number', 'Número Cabaña', ['class' => 'control-label']) !!}
                                        {!! Form::text('cabin_number', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
                                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}               
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('capacity', 'Capacidad', ['class' => 'control-label']) !!}
                                        {!! Form::text('capacity', null, ['class' => 'form-control']) !!}
                                    </div>  
                                    <div class="form-group">
                                        {!! Form::label('price', 'Precio', ['class' => 'control-label']) !!}
                                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class='form-group'>
                                        {!! Form::label('available', 'Disponible', ['class' => 'control-label']) !!}
                                        {!! Form::checkbox('available', 'false',['class' => 'form-control']) !!}
                                    </div>
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                    <a class="btn btn-default" href="{!! url('cabins/index') !!}" role="button">Cancelar</a>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@stop
