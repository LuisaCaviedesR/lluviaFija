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
				            <th width="16%">#Personas</th>
				            <th width="16%">Afiliado</th>
                            <th width="16%">Celular</th>
				            <th width="17%">Fecha Ingreso</th>
                            <th width="17%">Fecha Retiro</th>
                            <th width="17%">Acciones</th>
                          
				        </tr>
	 		        </thead>
                    @foreach($list as $rental)  
                    <tr>                      
                        <td>{{$rental->cabins[0]['cabin_number']}}</td>
                        <td>{{ $rental->quantity }}</td>
                        <td>{{$rental->affiliates[0]['name']}} {{$rental->affiliates[0]['lastname']}}</td>
                        <td>{{$rental->affiliates[0]['phone']}}</td>
                        <td>{{ $rental->datein }}</td>
                        <td>{{ $rental->dateout }}</td>
                        <td>
                            <a href="{{ route('rentals.edit', $rental->id) }}">
                                <i class="fa fa-pencil fa-fw"></i>
                            </a>
                            <a href="{{ route('rentals.show', $rental->id) }}">
                                <i class="fa fa-file-text-o fa-fw"></i>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['rentals.destroy', $rental->id],'style'=>'display: inline-block']) !!}
                                {!! Form::button('<span class="fa fa-trash-o fa-fw"></span>',['class'=>'bigicon delete_button','type'=>'submit']) !!}
                            {!! Form::close() !!}
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