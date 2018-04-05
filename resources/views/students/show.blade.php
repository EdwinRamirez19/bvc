@extends('layouts.master')

@section('content')

                

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
				<a href=" {{route ('students.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DEL ESTUDIANTE
                   
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
                        <th>Nº Celular</th>
                        <th>Firma</th>
                        <th>Autorizar uso datos</th>
                        <th>Institucion</th>
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->nombres_est}}</td>
                        <td>{{$student->apellidos_est}}</td>
                        <td>{{$student->identificacion_est}}</td>
                        <td>{{$student->celular_est}}</td>
                        <td>{{$student->firma_est}}</td>
                        <td>{{$student->autizacion_uso_datos_personales_est}}</td>
                        <td>{{$student->id_schools}}</td>
                                        
                       
                        <td width="10px">
                             <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-teal">
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
