@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Usuario</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form role="form" id="" action="" method="post">
                                    <div class="form-group">
                                         <label>Rol</label>
                                        <div class="input-group">
                                             <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-check bigicon"></i>
                                            </div>
                                        <select class="form-control" id="rol">
                                            <option value="Admin">Administrador</option>
                                            <option value="Consulta">Consulta</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="NombreUsuario" name="NombreUsuario" placeholder="Nombres Usuario" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="ApellidoUsuario" name="ApellidoUsuario" placeholder="Apellidos Usuario" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope-o bigicon"></i>
                                            </div>
                                            <input type="email" class="form-control" id="EmailUsuario" name="EmailUsuario" placeholder="Email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock bigicon"></i>
                                            </div>
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="location.href='{!! url('lluviafija/listarUsuarios') !!}'">Guardar</button>
                                    <a class="btn btn-default" href="{!! url('lluviafija/listarUsuarios') !!}" role="button">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@stop
