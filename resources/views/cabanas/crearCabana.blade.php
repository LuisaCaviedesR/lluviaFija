@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Cabañas</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form role="form" id="" action="" method="post">          	      
                                    <div class="form-group">
                                        <label>Número Cabaña</label>
                                        <input type="text" class="form-control" id="NumeroCabana" name="NumeroCabana" placeholder="Ingrese número de cabaña" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                         <textarea class="form-control" rows="5" id="Descripcion" name="Descripcion"></textarea>                 
                                    </div>
                                    <div class="form-group">
                                        <label>Capacidad</label>
                                         <input type="text" class="form-control" id="Capacidad" name="Capacidad" placeholder="Capacidad máxima de la cabaña" value="">
                                    </div>  
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">$</div>
                                            <input type="text" class="form-control" id="Precio" name="Precio" placeholder="Precio en pesos" value="">
                                        </div>    
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-default" href="" role="button">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop