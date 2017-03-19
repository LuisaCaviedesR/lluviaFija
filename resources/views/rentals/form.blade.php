                                    <!-- <div class="form-group">
                                         {!! Form::label('affiliate_id', 'Afiliados', ['class' => 'control-label']) !!}
                                        {{ Form::select('affiliate_id', $listAffiliates, null, array('class' => 'form-control search-select')) }}                                        
                                    </div> -->
                                    <div class="form-group">
                                        {!! Form::label('cabin_id', 'Cabaña', ['class' => 'control-label']) !!}
                                        {{ Form::select('cabin_id', $listCabins, isset($data->cabin_id) ? $data->cabin_id : null, array('class' => 'form-control search-select')) }}          
                                    </div>
                                     <div class="form-group">	
       		                           <label>Fechas</label>
                                         <div class="input-daterange input-group" id="datepicker">
                                            {!! Form::text('datein',null, ['class' => 'input-sm form-control','id'=>'datein']) !!} 
                                            <span class="input-group-addon">a</span>
                                            {!! Form::text('dateout',null, ['class' => 'input-sm form-control','id'=>'dateout']) !!} 
                                        </div>
       		                       </div>                                  
                                    <div class="form-group">
                                       <div class="col-sm-3 fix-padding-left">
                                        {!! Form::label('quantity', '#Personas', ['class' => 'control-label']) !!}
                                        {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
                                        </div>
                                       <div class="col-sm-2"> 
                                        {!! Form::label('days', 'Dias', ['class' => 'control-label']) !!}
                                        {!! Form::text('days',null, ['class' => 'form-control','id'=>'days','readonly'=>true]) !!}
                                        </div> 
                                       <div class="col-sm-2"> 
                                        {!! Form::label('nights', 'Noches', ['class' => 'control-label']) !!}
                                        {!! Form::text('nights', null, ['class' => 'form-control','id'=>'nights','readonly'=>true]) !!}                       </div>      
                                      <div class="col-sm-5 fix-padding-right"> 
                                           {!! Form::label('price', 'Valor', ['class' => 'control-label']) !!}
                                           <div class="input-group">
                                                <div class="input-group-addon">$</div>
                                                {!! Form::text('price',null, ['class' => 'form-control','id'=>'price','readonly'=>true]) !!}
                                           </div>         
                                      </div>  
                                   </div> 
                                    