@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
         <div class="card">
             <div class="header">
                @can('students.create')

				    <a href=" {{route ('students.create') }}" class="btn  btn-info pull-right">Crear Estudiante</a>
                @endcan
                <h2>
                 DATOS DEL ESTUDIANTE
                    <small>Lista de forma general los datos del estudiante</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo Documento</th>
                        <th>Identificacion</th>
                        <th>Sexo</th>
                        <th>Nº Celular</th>
                        <th>Firma</th>
                        <th>Autorizar uso datos</th>
                        <th>Institucion</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        
                        <td>{{$student->nombres_est}}</td>
                        <td>{{$student->apellidos_est}}</td>
                        <td>{{$student->tipoDocumento_est}}</td>
                        <td>{{$student->identificacion_est}}</td>
                        <td>{{$student->sexo_est}}</td>
                        <td>{{$student->celular_est}}</td>
                        <td>{{$student->firma_est}}</td>
                        <td>{{$student->autizacion_uso_datos_personales_est}}</td>
                        <td>{{$student->schools_id}}</td>
                                        
                        <td width="10px">
                            @can('students.show')
                                <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">
                                 Ver
                                </a>
                            @endcan    
                        </td>
                        <td width="10px">
                            @can('students.edit')
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                                 </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('students.destroy')

                                {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$students->render()}}
			</div>
		</div>
	</div>
</div>
@endsection