
<div class="form-group">
	{{ Form::label('name', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
	<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    </div>
		<div class="form-group">
	    {{ Form::label('description', 'Descripción') }}
	    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
		</div>
			<hr>
				<h3>Permiso especial</h3>
				        <div>
 							<label>{{ Form::radio('special', 'all-access') }} Acceso total
 							</label>
 						</div>

 								<div>
 									<label>{{ Form::radio('special', 'no-access') }} Ningún acceso
 									</label>
                         		 </div>

		                         	<hr>
                              			<h3>Lista de permisos</h3>
  									
										@foreach($permissions as $permission)
	    								   	<div>
                      							{{ Form::checkbox('permissions[]', $permission->id, null, ['class' => 'filled-in', 'id' => $permission->id]) }}
                      							<label for="{{$permission->id}}">{{ $permission->name }}
                      							</label>
                      								<em>({{$permission->description ?: 'sin descripcion'}})
                      								</em>
                   						    </div>
	    								@endforeach
    									
      								

                                        				<div class="form-group">
														{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
	

															<a href="{{ route('roles.index') }}"class="btn btn-sm btn-default">Cancelar 
															</a>
														</div>