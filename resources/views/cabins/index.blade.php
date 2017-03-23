@extends ('layouts.home')
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
                        @if($cabin->available == 1 )
                            <td>Si</td>
                        @else
                            <td>No</td>
                        @endif
                        <td>{{$cabin->price}}</td>
                        <td>
                            <a href="{{ route('cabins.edit', $cabin->id) }}">
                                <i class="fa fa-pencil fa-fw"></i>
                            </a>

                            <a href="{{ route('cabins.show', $cabin->id) }}">
                                <i class="fa fa-file-text-o fa-fw"></i>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['cabins.destroy', $cabin->id],'style'=>'display: inline-block']) !!}
                                {!! Form::button('<span class="fa fa-trash-o fa-fw"></span>',['class' => 'bigicon delete_button','type'=>'submit']) !!}
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
