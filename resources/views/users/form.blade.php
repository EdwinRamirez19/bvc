
       <div class="form-group">
           {{Form::label('name'),'Nombre'}}
           {{Form::text('name',null,['class'=>'form-control'])}}
       </div>

        <hr>
            <h3>Lista de role</h3>

                  @foreach($roles as $role)
                    <div>
                      {{ Form::checkbox('roles[]', $role->id, null, ['class' => 'filled-in', 'id' => $role->id]) }}
                      <label for="{{$role->id}}">{{ $role->name }}</label>
                    </div>
                  @endforeach

                           
              

        <div class="form-group">
            {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
              <a href="{{ route('users.index') }}"class="btn btn-sm btn-default">Cancelar </a>
            
        </div>
      

  


                          
                              


                             

                           

                           

                                      
