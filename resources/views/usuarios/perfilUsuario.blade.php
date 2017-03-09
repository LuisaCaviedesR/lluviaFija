@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Perfil de Usuario</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form role="form" id="" action="" method="post">
                                   <div class="form-group">
                                        <label>Nombres</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombres" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Apellidos</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user bigicon"></i>
                                            </div>
                                            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Apellidos" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-envelope-o bigicon"></i>
                                            </div>
                                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-lock bigicon"></i>
                                            </div>
                                            <input type="password" class="form-control" id="" name="" placeholder="Password" value="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-default" href="{!! url('lluviafija/listarAfiliados') !!}" role="button">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
@stop