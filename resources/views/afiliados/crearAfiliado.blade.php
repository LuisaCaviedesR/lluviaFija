@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Afiliado</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form role="form" id="" action="" method="post">
                                    <div class="form-group">
                                         <label>Tipo de Identificación</label>
                                        <div class="input-group">
                                             <div class="input-group-addon">
                                                <i class="fa fa-credit-card bigicon"></i>
                                            </div>
                                        <select class="form-control" id="TipoDocumento">
                                            <option value="NIT">Nit</option>
                                            <option value="CC">Cédula de ciudadanía</option>
                                            <option value="TI">Tarjeta de Identidad</option>
                                            <option value="CE">Cédula de Extranjeria</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Número de Identificación</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-credit-card bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="IdAfiliado" name="IdAfiliado" placeholder="Ingrese Identificación Afiliado" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="NombreAfiliado" name="NombreAfiliado" placeholder="Nombres Afiliado" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="ApellidoAfiliado" name="ApellidoAfiliado" placeholder="Apellidos Afiliado" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope-o bigicon"></i>
                                            </div>
                                            <input type="email" class="form-control" id="EmailAfiliado" name="EmailAfiliado" placeholder="Email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Celular</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="CelularAfiliado" name="CelularAfiliado" placeholder="Celular" value="">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="location.href='{!! url('lluviafija/listarAfiliados') !!}'">Guardar</button>
                                    <a class="btn btn-default" href="{!! url('lluviafija/listarAfiliados') !!}" role="button">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@stop
