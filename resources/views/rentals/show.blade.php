@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle Alquiler</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td>Afiliado</td>
                                        <td>{{$data->affiliates->full_name}}</td>
                                        <td>Identificación</td>
                                        <td>{{$data->affiliates->number_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Cabaña</td>
                                        <td>{{$data->cabins->cabin_number}}</td>
                                        <td>Capacidad max</td>
                                        <td>{{$data->cabins->capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha Ingreso</td>
                                        <td>{{$data->datein}}</td>
                                        <td>Fecha Salida</td>
                                        <td>{{$data->dateout}}</td>
                                    </tr>
                                    <tr>
                                        <td>Personas</td>
                                        <td>{{$data->quantity}}</td>
                                        <td>Valor</td>
                                        <td>{{$data->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Días</td>
                                        <td>{{$data->days}}</td>
                                        <td>Noches</td>
                                        <td>{{$data->nights}}</td>
                                    </tr>
				                </table>  
                                <button type="button" class="btn btn-primary" onclick="location.href='{!! url('rentals') !!}'">
                                Regresar
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop