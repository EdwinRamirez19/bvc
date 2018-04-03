@extends('layouts.master')

@section('content')

                

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
        <a href=" {{route ('teachers.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DEl DOCENTE
                    
                </h2>
            </div>
     <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">id</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Identificacion</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                        
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->nombres_prof}}</td>
                        <td>{{$teacher->apellidos_prof}}</td>
                        <td>{{$teacher->identificacion_prof}}</td>
                        <td>{{$teacher->celular_prof}}</td>
                        <td>{{$teacher->correo_prof}}</td>
                        
                
                        <td width="10px">
                             <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            </a>
                        </td>
                        
                    </tr>
                   
                    </tbody>
                </table>
                
      </div>
    </div>
  </div>
</div>

@endsection
