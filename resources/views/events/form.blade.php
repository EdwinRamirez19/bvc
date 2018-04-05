@if(empty($event))
<form method="POST" id="fx" action="{{ route('events.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('events.update' , $event->id) }}" class="smart-form">
 {{ method_field('PUT') }}
@endif
								{{ csrf_field() }}
                            <div class="row clearfix">

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->nombre_even OR old('nombre_even') }}" class="form-control date" placeholder="Nombre" id="nombre_even" name="nombre_even">
                                            @foreach ($errors->get('nombre_even') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->lugar_even OR old('lugar_even') }}" class="form-control date" placeholder="Lugar" id="lugar_even" name="lugar_even">
                                            @foreach ($errors->get('lugar_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->descripcion_even OR old('descripcion_even') }}" class="form-control date" placeholder="Descripción" id="descripcion_even" name="descripcion_even">
                                            @foreach ($errors->get('descripcion_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>



                                 <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->tipo_even OR old('tipo_even') }}" class="form-control date" placeholder="Tipo" id="tipo_even" name="tipo_even">
                                            @foreach ($errors->get('tipo_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>



                                 <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->organizador_even OR old('organizador_even') }}" class="form-control date" placeholder="Organizador" id="organizador_even" name="organizador_even">
                                            @foreach ($errors->get('organizador_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>



                                 <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->fecha_even OR old('fecha_even') }}" class="form-control date" placeholder="Fecha" id="fecha_even" name="fecha_even">
                                            @foreach ($errors->get('fecha_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $event->hora_even OR old('hora_even') }}" class="form-control date" placeholder="Hora" id="hora_even" name="hora_even">
                                            @foreach ($errors->get('hora_even') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <footer>
                            	
                            	 <button type="summit" class="btn btn-primary waves-effect">Guardar</button>
                            	 <button type="button" class="btn btn-default" onclick="window.history.back();">
									Cancelar
								</button>
                            </footer>
                           
							</form>