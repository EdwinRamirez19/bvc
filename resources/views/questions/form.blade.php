@if(empty($question))
<form method="POST" id="fx" action="{{ route('questions.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('questions.update' , $question->id) }}" class="smart-form">
 {{ method_field('PUT') }}
@endif
								{{ csrf_field() }}
                            <div class="row clearfix">

                                <div class="col-md-4">

                                    <div class="form-group">
                                        {{ Form::select('conf1', ['UNO' => '1', 'DOS' => '2']) }} 
                                        Nivel de Satisfaccion
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