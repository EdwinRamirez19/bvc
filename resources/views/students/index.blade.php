@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
				<a href=" {{route ('students.create') }}" class="btn  btn-info pull-right">Crear Estudiante</a>
                <h2>
                 DATOS DEL ESTUDIANTE
                    <small>Lista de forma general los datos del estudiante</small>
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
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->nombres_est}}</td>
                        <td>{{$student->apellidos_est}}</td>
                        <td>{{$student->identificacion_est}}</td>
                        <td>{{$student->celular_est}}</td>
                        <td>{{$student->firma_est}}</td>
                        <td>{{$student->autizacion_uso_datos_personales_est}}</td>
                                        
                        <td width="10px">
                             <a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-info">
                                 Ver
                            </a>
                        </td>
                        <td width="10px">
                             <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            </a>
                        </td>
                        <td width="10px">
                            {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
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