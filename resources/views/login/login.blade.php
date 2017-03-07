@extends ('layouts.app')
@section('content')

<div class="col-xs-3">
</div>

<div class="col-xs-6">
<div class="modal-content">
          <div class="modal-header">
              <center><h4 class="modal-title">Panel de Control</h4></center>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="form-login">
                              <div class="form-group">
                                  <label for="usuario" class="control-label">Usuario</label>
                                  <input type="email" class="form-control" id="usuario" name="usuario" value=""  placeholder="usurio@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="checkbox">
                                  <label>
                                <input type="checkbox" name="remember" id="remember"> Recordarme
                                </label>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Log In</button>
                          </form>
                      </div>
                  </div>
            </div>
      </div>
</div>
</div>
<div class="col-xs-3">
</div>
                            
@stop
