@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Alquiler</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                {!! Form::model($data, [
                                    'method' => 'PUT',
                                    'route' => ['rentals.update', $data->id]
                                ]) !!}
                                   @include('rentals.form')
                                 
                                    <button type= "submit" class="submit-button btn btn-primary">Guardar</button>
                                    <a class=" submit-button btn btn-default" href="{!! url('rentals') !!}" role="button">Cancelar</a>      
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop
