
@if(empty($teacher))
<form method="POST" id="fx" action="{{ route('teachers.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('teachers.update' , $teacher->id) }}" class="smart-form">
 {{ method_field('PUT') }}
@endif
        {{ csrf_field() }}



        <div class="col-md-4">

            <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons">school</i>
                </span>

                <div class="form-line">
                    <select name="schools_id" class="form-control" required>
                        <option>Instituciones</option>
                        @foreach($schools as $school)
                        <option value="{{$school['id']}}">
                            {{$school['nombre_esc']}}
                        </option>
                        @endforeach
                     </select>
                </div>
            </div>
        </div>
        <div class="row clearfix">

            <div class="col-md-4">

                <div class="input-group">

                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" value="{{ $teacher->nombres_prof OR old('nombres_prof') }}" class="form-control date" placeholder="Nombres" id="nombres_prof" name="nombres_prof">
                        @foreach ($errors->get('nombres_prof') as $message) 
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
                        <input type="text" value="{{ $teacher->apellidos_prof OR old('apellidos_prof') }}" class="form-control date" placeholder="Apellidos" id="apellidos_prof" name="apellidos_prof">
                        @foreach ($errors->get('apellidos_prof') as $message) 
                                <div class="note note-error">{{ $message }}</div>
                            @endforeach
                    </div>
                </div>
            </div>
               <div class="col-md-4">

                    <div class="input-group">

                        <span class="input-group-addon">
                            <i class="material-icons">person_outline</i>
                        </span>
                        <div class="form-line">
                            <input type="text" value="{{ $teacher->identificacion_prof OR old('identificacion_prof') }}" class="form-control date" placeholder="Identificacion" id="identificacion_prof" name="identificacion_prof">
                            @foreach ($errors->get('identificacion_prof') as $message) 
                                    <div class="note note-error">{{ $message }}</div>
                                @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="input-group">

                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" value="{{ $teacher->celular_prof OR old('celular_prof') }}" class="form-control date" placeholder="Celular" id="celular_prof" name="celular_prof">
                            @foreach ($errors->get('celular_prof') as $message) 
                                    <div class="note note-error">{{ $message }}</div>
                                @endforeach
                        </div>
                    </div>
                </div>

            <div class="col-md-4">

                <div class="input-group">

                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    <div class="form-line">
                        <input type="text" value="{{ $teacher->correo_prof OR old('correo_prof') }}" class="form-control date" placeholder="Correo" id="correo_prof" name="correo_prof">
                        @foreach ($errors->get('correo_prof') as $message) 
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