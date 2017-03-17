@extends ('layouts.app')
@section('content')
<p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">Cabañas</div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('cabins/create') !!}'">
                                Registrar Cabaña <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
           	    <div class="panel-body">
                <div class="table-responsive col-lgl-12">
           		  <table class="table table-striped table-bordered table-hover" id="cabin">
	 		        <thead>
				        <tr>
				            <th width="16%"># Cabaña</th>
				            <th width="16%">Capacidad</th>
				            <th width="18%">Descripción</th>
                            <th width="16%">Disponible</th>
				            <th width="16%">Valor</th>
                            <th width="16%">Acciones</th>
				        </tr>
	 		        </thead>
                    @foreach($list as $cabin)
                    <tr>
                        <td>{{$cabin->cabin_number}}</td>
                        <td>{{$cabin->capacity}}</td>
                        <td>{{$cabin->description}}</td>
                        <td>{{$cabin->available}}</td>
                        <td>{{$cabin->price}}</td>
                        <td><a href=""><i class="fa fa-pencil fa-fw" title="Editar"></i></a>
                            <a href="#" ><i class="fa fa-trash-o  fa-fw" title="Borrar"></i></a> 
                        </td>
                    </tr>
                    @endforeach
				    </table>
                    </div>
			  </div>
		  </div>
	   </div>
    </div>
@stop