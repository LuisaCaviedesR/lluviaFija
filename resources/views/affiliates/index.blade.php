@extends ('layouts.home')
@section('content')
<p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">Afiliados</div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('affiliates/create') !!}'">
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
                            <th width="16%">Tipo ID</th>
				            <th width="16%">Número de Identificación</th>
				            <th width="16%">Nombres</th>
				            <th width="16%">Apellidos</th>
                            <th width="16%">Email</th>
				            <th width="16%">Celular</th>
                            <th width="16%">Acciones</th>
				        </tr>
	 		        </thead>
                    @foreach($list as $affiliate)
                    <tr>
                        <td>{{$affiliate->documentTypes->name}}</td>
                        <td>{{$affiliate->number_id}}</td>
                        <td>{{$affiliate->name}}</td>
                        <td>{{$affiliate->lastname}}</td>
                        <td>{{$affiliate->email}}</td>
                        <td>{{$affiliate->phone}}</td>
                        <td><a href="{{ route('affiliates.edit', $affiliate->id) }}">
                              <i class="fa fa-pencil fa-fw" title="Editar"></i>
                            </a>
                             <a href="{{ route('affiliates.show', $affiliate->id) }}">
                                <i class="fa fa-file-text-o fa-fw"></i>
                            </a>
                             @if (Auth::user()->roles->name === 'Administrador')
                            <!-------------------------- borrar ------------------------->
                             {!! Form::open(['method' => 'DELETE','route' => ['affiliates.destroy', $affiliate->id],'style'=>'display: inline-block']) !!}

                                {!! Form::button('<span class="fa fa-trash-o fa-fw"></span>',['class'=>'bigicon delete_button','type'=>'submit']) !!}

                            {!! Form::close() !!}
                            @endif

                            <!---------------------------- fin de borar --------------------->
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
