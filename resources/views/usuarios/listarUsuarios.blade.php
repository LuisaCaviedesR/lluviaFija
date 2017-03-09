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
				            <th width="16%">id</th>
				            <th width="16%">Rol</th>
				            <th width="18%">Nombre</th>
                            <th width="16%">Apellidos</th>
				            <th width="16%">Email</th>
                            <th width="16%">Fecha Creación</th>
                            <th width="16%">Fecha Actualización</th>
                            <th width="16%">Acciones</th>
				        </tr>
	 		        </thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
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
