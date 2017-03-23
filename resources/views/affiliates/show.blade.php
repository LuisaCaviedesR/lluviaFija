@extends ('layouts.home')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle Afiliado</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td>Nombre del Afiliado</td>
                                        <td>{{$data->full_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Num. Identificación</td>
                                        <td>{{$data->number_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Teléfono</td>
                                        <td>{{$data->phone}}</td>
                                    </tr>
                                    
				                </table>  
                                <button type="button" class="btn btn-primary" onclick="location.href='{!! url('affiliates') !!}'">
                                Regresar
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop
