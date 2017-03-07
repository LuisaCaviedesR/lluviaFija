@extends ('layouts.app')
@section('content')
<p></p>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Alquiler</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <form role="form" id="" action="" method="post">          	      
                                    <div class="form-group">
                                        <label>Afiliado</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Cabaña</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="" value="">                
                                    </div>
                                     <div class="form-group">	
       		                           <label>Fechas</label>
                                         <div class="input-daterange input-group" id="datepicker">
                                            <input type="text" class="input-sm form-control" name="start" />
                                            <span class="input-group-addon">a</span>
                                            <input type="text" class="input-sm form-control" name="end" />
                                        </div>
       		                       </div>  
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">$</div>
                                            <input type="text" class="form-control" id="Precio" name="Precio" placeholder="Valor en pesos" value="">
                                        </div>    
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <a class="btn btn-default" href="{!! url('lluviafija/listarAlquiler') !!}" role="button">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop
