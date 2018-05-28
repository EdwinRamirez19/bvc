

       <div class="form-group">
           {{Form::label('name'),'Nombre'}}
           {{Form::text('name',null,['class'=>'form-control'])}}
       </div>

        <hr>
            <h3>Lista de role</h3>
              <div class="form-group">
                
                  @foreach($roles as $role)
                    <li>
                      <label>
                        {{ Form::checkbox('roles[]', $role->id, null,['class' => 'with-gap', 'checked' => 'checked']) }}
                        {{ $role->name }}
                        <em>({{ $role->description ?: 'sin descripcion' }})</em>
                        
                      </label>
                      
                    </li>

                  @endforeach
                  
                
              

              </div>

                           
              

        <div class="form-group">
            {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary']) }}
            
        </div>
      

  


                          
                              


                             

                           

                           

                                      
