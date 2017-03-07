@extends ('layouts.app')
@section('content')
<p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">Afiliados</div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('lluviafija/crearAfiliado') !!}'">
                                Registrar Afiliado <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
           	    <div class="panel-body">
                <div class="table-responsive col-lgl-12">
           		  <table class="table table-striped table-bordered table-hover" id="afiliado">
	 		        <thead>
				        <tr>
				            <th width="16%">Id</th>
				            <th width="16%">Nombres</th>
				            <th width="18%">Apellidos</th>
                            <th width="16%">Email</th>
				            <th width="16%">Celular</th>
                            <th width="16%">Acciones</th>
				        </tr>
	 		        </thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input type="radio"></td>
                    </tr>
				    </table>
                    </div>
			  </div>
		  </div>
	   </div>
    </div>

@stop
