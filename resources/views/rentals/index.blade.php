@extends ('layouts.app')
@section('content')
    <p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">  
                        <div class="col-sm-9">Alquiler</div>	
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('rentals/create') !!}'">
                                Registrar Alquiler <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>
                    </div>
                </div> 
           	    <div class="panel-body">
                <div class="table-responsive col-lgl-12">
           		  <table class="table table-striped table-bordered table-hover" id="alquiler">
	 		        <thead>
				        <tr>
				            <th width="16%"># Cabaña</th>
				            <th width="16%">Capacidad</th>
				            <th width="16%">Afiliado</th>
                            <th width="16%">Celular</th>
				            <th width="17%">Fecha Ingeso</th>
                            <th width="17%">Fecha Retiro</th>
                          
				        </tr>
	 		        </thead>	 					
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      
                    </tr>	 											
				    </table>
                    </div>
			  </div>
		  </div>
	   </div>
    </div>
@stop