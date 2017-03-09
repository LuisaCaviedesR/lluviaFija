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
                                        <select class="form-control search-select">
                                            <option></option>
                                            <option value="AL">Pepito perez</option>  
                                            <option value="WY">Filomena Roman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Cabaña</label>
                                        <select class="form-control search-select">
                                            <option></option>
                                            <option value="AL">Pepito perez</option>  
                                            <option value="WY">Filomena Roman</option>
                                        </select>           
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
                                       <div class="col-sm-3 fix-padding-left">
                                            <label>#Personas</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="" value="">                
                                       </div>
                                       <div class="col-sm-2"> 
                                            <label>Días</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="" value="">                
                                       </div> 
                                       <div class="col-sm-2"> 
                                            <label>Noches</label>
                                            <input type="text" class="form-control" id="" name="" placeholder="" value="">                
                                       </div>      
                                      <div class="col-sm-5 fix-padding-right"> 
                                            <label>Valor</label>
                                           <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                <input type="text" class="form-control" id="" placeholder="">
                                           </div>         
                                      </div>  
                                   </div> 
                                    <button type= "button" class="submit-button btn btn-primary" onclick="location.href='{!! url('lluviafija/listarAlquiler') !!}'">Guardar</button>
                                    <a class=" submit-button btn btn-default" href="{!! url('lluviafija/listarAlquiler') !!}" role="button">Cancelar</a>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop
