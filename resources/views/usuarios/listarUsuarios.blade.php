@extends ('layouts.app')
@section('content')
<p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">Usuarios</div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('lluviafija/crearUsuario') !!}'">
                                Registrar Usuario <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
           	    <div class="panel-body">
                <div class="table-responsive col-lgl-12">
           		  <table class="table table-striped table-bordered table-hover" id="usuario1">
	 		        <thead>
				        <tr>
				            <th width="19%">Rol</th>
				            <th width="20%">Nombre</th>
                            <th width="20%">Apellidos</th>
				            <th width="27%">Email</th>
                            <th width="12%">Acciones</th>
				        </tr>
	 		        </thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href=""><i class="fa fa-pencil fa-fw" title="Editar"></i></a>
                            <a href="#" ><i class="fa fa-trash-o  fa-fw" title="Borrar"></i></a>
                        </td>
                    </tr>
				    </table>
                    </div>
			  </div>
		  </div>
	   </div>
    </div>
@stop
