@extends ('layouts.home')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Detalle Usuarios</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td>Rol</td>
                                        <td>{{$data->rol_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nombres</td>
                                        <td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Apellidos</td>
                                        <td>{{$data->lastname}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Contraseña</td>
                                        <td>{{$data->password}}</td>
                                    </tr>
				                </table>
                                <button type="button" class="btn btn-primary" onclick="location.href='{!! url('users') !!}'">
                                Regresar
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>

@stop
