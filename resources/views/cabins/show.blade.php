@extends ('layouts.home')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle Cabaña</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td>Número de Cabaña</td>
                                        <td>{{$data->cabin_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Descripción</td>
                                        <td>{{$data->description}}</td>
                                    </tr>
                                    <tr>
                                        <td>Capacidad</td>
                                        <td>{{$data->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Precio de la Habitación</td>
                                        <td>{{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Disponible</td>
                                        <td>{{$data->available}}</td>
                                    </tr>
				                </table>
                                <button type="button" class="btn btn-primary" onclick="location.href='{!! url('cabins') !!}'">
                                Regresar
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>

@stop
