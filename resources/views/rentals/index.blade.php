@extends ('layouts.home')
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
                <div class="table-responsive col-lg-12">
                  <div class="row">
                       <div class="form-group col-sm-4">	
       		        <label>Filtro fechas</label>
                        <div class="input-daterange input-group" id="datepicker">
                        <span class="input-group-addon">de</span>
                        {!! Form::text('dateStart',null, ['class' => 'input-sm form-control','id'=>'dateStart']) !!} 
                         <span class="input-group-addon">a</span>
                         {!! Form::text('dateEnd',null, ['class' => 'input-sm form-control','id'=>'dateEnd']) !!} 
                         </div>
       		       </div> 
                  </div>             
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
                        <td>{{$rental->cabins->cabin_number}}</td>
                        <td>{{ $rental->quantity }}</td>
                        <td>{{$rental->affiliates->full_name}}</td>
                        <td>{{$rental->affiliates->phone}}</td>
                        <td>{{ $rental->datein }}</td>
                        <td>{{ $rental->dateout }}</td>
                        <td>
                            <a href="{{ route('rentals.edit', $rental->id) }}">
                                <i class="fa fa-pencil fa-fw"></i>
                            </a>
                            <a href="{{ route('rentals.show', $rental->id) }}">
                                <i class="fa fa-file-text-o fa-fw"></i>
                            </a>
                             @if (Auth::user()->roles->name === 'Administrador')
                            {!! Form::open(['method' => 'DELETE','route' => ['rentals.destroy', $rental->id],'style'=>'display: inline-block']) !!}
                                {!! Form::button('<span class="fa fa-trash-o fa-fw"></span>',['class'=>'bigicon delete_button','type'=>'submit']) !!}
                            {!! Form::close() !!}
                            @endif
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
