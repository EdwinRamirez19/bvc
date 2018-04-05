
@if(empty($school))
<form method="POST" id="fx" action="{{ route('schools.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('schools.update' , $school->id) }}" class="smart-form">
 {{ method_field('PUT') }}
@endif
								{{ csrf_field() }}
                            <div class="row clearfix">

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">school</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $school->nombre_esc OR old('nombre_esc') }}" class="form-control date" placeholder="Nombre" id="nombre_esc" name="nombre_esc">
                                            @foreach ($errors->get('nombre_esc') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">description</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $school->descripcion_esc OR old('descripcion_esc') }}" class="form-control date" placeholder="Descripcion" id="descripcion_esc" name="descripcion_esc">
                                            @foreach ($errors->get('descripcion_esc') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">place</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" value="{{ $school->ciudad_esc OR old('ciudad_esc') }}" class="form-control date" placeholder="Ciudad" id="ciudad_esc" name="ciudad_esc">
                                            @foreach ($errors->get('ciudad_esc') as $message) 
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