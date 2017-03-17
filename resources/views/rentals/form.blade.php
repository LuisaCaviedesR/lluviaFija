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
                                {!! Form::open(['route' => 'rentals.store']) !!}
                                    <div class="form-group">
                                         {!! Form::label('affiliate_id', 'Afiliados', ['class' => 'control-label']) !!}
                                        {{ Form::select('affiliate_id', $listAffiliates, null, array('class' => 'form-control search-select')) }}                                        
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('cabin_id', 'Cabaña', ['class' => 'control-label']) !!}
                                        {{ Form::select('cabin_id', $listCabins, null, array('class' => 'form-control search-select')) }}          
                                    </div>
                                     <div class="form-group">	
       		                           <label>Fechas</label>
                                         <div class="input-daterange input-group" id="datepicker">
                                            {!! Form::text('datein', null, ['class' => 'input-sm form-control']) !!} 
                                            <span class="input-group-addon">a</span>
                                            {!! Form::text('dateout', null, ['class' => 'input-sm form-control']) !!} 
                                        </div>
       		                       </div>                                  
                                    <div class="form-group">
                                       <div class="col-sm-3 fix-padding-left">
                                        {!! Form::label('quantity', '#Personas', ['class' => 'control-label']) !!}
                                        {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                                        </div>
                                       <div class="col-sm-2"> 
                                        {!! Form::label('days', 'Dias', ['class' => 'control-label']) !!}
                                        {!! Form::text('days', null, ['class' => 'form-control']) !!}
                                        </div> 
                                       <div class="col-sm-2"> 
                                        {!! Form::label('nights', 'Noches', ['class' => 'control-label']) !!}
                                        {!! Form::text('nights', null, ['class' => 'form-control']) !!}                       </div>      
                                      <div class="col-sm-5 fix-padding-right"> 
                                           {!! Form::label('price', '#Valor', ['class' => 'control-label']) !!}
                                           <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                                           </div>         
                                      </div>  
                                   </div> 
                                    <button type= "submit" class="submit-button btn btn-primary">Guardar</button>
                                    <a class=" submit-button btn btn-default" href="{!! url('rentals') !!}" role="button">Cancelar</a>      
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>        

@stop
