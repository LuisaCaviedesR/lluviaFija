@extends ('layouts.home')
@section('content')
<p></p>
        <div class="row">
   	        <div class="col-lg-12 col-md-12 col-sm-12">
   		       <div class="panel panel-default">
   			      <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-9">Usuarios</div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary" onclick="location.href='{!! url('users/create') !!}'">
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
                    @foreach($list as $user)
                    <tr>
                        <td></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}">
                                <i class="fa fa-pencil fa-fw" title="Editar"></i>
                            </a>
                           {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display: inline-block']) !!}
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
