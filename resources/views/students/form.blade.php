
@if(empty($student))
<form method="POST" id="fx" action="{{ route('students.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('students.update' , $student->id) }}" class="smart-form">
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

    <div class="col-md-4">

        <div class="input-group">

            <span class="input-group-addon">
                <i class="material-icons">person</i>
            </span>
            <div class="form-line">
                <input type="text" value="{{ $student->nombres_est OR old('nombres_est') }}" class="form-control date{{ $errors->has('nombres_est') ? ' has-error' : '' }}" placeholder="Nombres" id="nombres_est" name="nombres_est">
                
            </div>
        </div>
    </div>


    <div class="col-md-4">

        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">person</i>
            </span>
            <div class="form-line">
                <input type="text" value="{{ $student->apellidos_est OR old('apellidos_est') }}" class="form-control date" placeholder="Apellidos" id="apellidos_est" name="apellidos_est">
                @foreach ($errors->get('apellidos_est') as $message) 
						<div class="note note-error">{{ $message }}</div>
					@endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">perm_identity</i>
            </span>
            <div class="form-line">
                <select name="tipoDocumento_est" class="form-control" required>
                    <option>Tipo de Documento</option>
                    <option value="TI">Targeta de Identidad</option>
                    <option value="CC">Cedula de Ciudadania</option>
                    <option value="TP">Targeta de Pasaporte</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">perm_identity</i>
            </span>
            <div class="form-line">
                <input type="text" value="{{ $student->identificacion_est OR old('identificacion_est') }}" class="form-control date" placeholder="Identificacion" id="identificacion_est" name="identificacion_est" >
                @foreach ($errors->get('identificacion_est') as $message) 
						<div class="note note-error">{{ $message }}</div>
					@endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">perm_identity</i>
            </span>
            <div class="form-line">
                <select name="sexo_est" class="form-control" required>
                    <option>Seleccione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">phone</i>
            </span>
            <div class="form-line">
                <input type="text" value="{{ $student->celular_est OR old('celular_est') }}" class="form-control date" placeholder="Celular" id="celular_est" name="celular_est">
                @foreach ($errors->get('celular_est') as $message) 
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
                <input type="text" value="{{ $student->correo_est OR old('correo_est') }}" class="form-control date" placeholder="E-mail" id="correo_est" name="correo_est">
                @foreach ($errors->get('correo_est') as $message) 
						<div class="note note-error">{{ $message }}</div>
					@endforeach
            </div>
        </div>
    </div>
    
     <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">mode_edit</i>
            </span>
            <div class="form-line">
                <input type="text" value="{{ $student->firma_est OR old('firma_est') }}"  class="form-control date" placeholder="Firma" id="firma_est" name="firma_est">
                @foreach ($errors->get('firma_est') as $message) 
						<div class="note note-error">{{ $message }}</div>
					@endforeach
            </div>
        </div>
    </div>

     <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="material-icons">verified_user</i>
            </span>
            <div class="form-line">
                <select name="autizacion_uso_datos_personales_est" id="autizacion_uso_datos_personales_est" class="form-control" required>
                    <option>Autorizar</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
                @foreach ($errors->get('autizacion_uso_datos_personales_est') as $message) 
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