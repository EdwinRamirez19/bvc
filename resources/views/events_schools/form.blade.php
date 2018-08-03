
    @if(empty($event_school))
    <form method="POST" id="fx" action="{{ route('events_schools.store') }}" class="smart-form">
    @else
    <form method="POST" id="fx" action="{{ route('events_schools.update' , $event_school->id) }}" class="smart-form">
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
                                
                            {!! Form::select('id', $schools, null, ['class' => 'form-control', 
                            'id' => 'school_id', 'placeholder' => 'Instituciones']) !!}
                            </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">school</i>
                        </span>
                            <div class="form-line">
                            {!! Form::select('id', $events, null, ['class' => 'form-control', 
                            'id' => 'event_id', 'placeholder' => 'Eventos']) !!}
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

