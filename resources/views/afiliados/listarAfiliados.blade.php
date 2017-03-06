@extends ('layouts.app')
@section('content')

  <div class="container">
	<div class="page-header">
       <h1>Listar Afiliados</h1>
    </div>
	
<table class="table table-hover" >
             <tr>
                <td colspan="6">A continuación encotrara los afiliados de nuestro parque</td>
            </tr>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Boo</td>
                <td>johnny81@gmail.com</td>
                <td>xxx-xxxxxxx</td>
                <td><input type="radio"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mary</td>
                <td>Brown</td>
                <td>missmary@gmail.com</td>
                <td>xxx-xxxxxxx</td>
                <td><input type="radio"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>James</td>
                <td>Mooray</td>
                <td>jijames@gmail.com</td>
                <td>xxx-xxxxxxx</td>
                <td><input type="radio"></td>
            </tr>
        </table>

  </div>
@stop


