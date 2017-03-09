@extends ('layouts.home')
@section('content1')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Usuario</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12">
                                    <div class="well">
                                        <form id="form-login">
                                            <div class="form-group">
                                                <label for="password" class="control-label">Usuario</label>
                                                <input type="text" class="form-control" id="usuario" name"usuario" value="" placeholder="usuario@gmail.com">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" id="remember">Recordarme
                                                </label>
                                            </div>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('lluviafija/listarAlquiler') !!}'">Log In</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
