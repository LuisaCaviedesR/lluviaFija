@extends ('layouts.app')
@section('content')

  <div class="container">
	<div class="page-header">
       <h1>Tablas y estilos en <small>Boostrap 3</small></h1>
    </div>
	
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Rocky</td>
            <td>Balboa</td>
            <td>rockybalboa@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>

  </div>
@stop


