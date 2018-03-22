@extends('layouts.master')

@section('content')



	<table class="table">
	<div class="row">
     		Listado de estudiantes
     		<a href="{{ route('students.create') }}" class="btn btn-sm btn-primary pull-right">
     			Crear
     		</a> 
    </div>
	<thead>
		<tr>
			<th width="10px">id</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Identificacion</th>
			<th>Nº Celular</th>
			<th>Firma</th>
			<th>Autorizacion Datos Personales</th>
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
			<a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-default">
				Ver
			</a>
		</td>
		<td width="10px">
			<a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-default">
				Editar
			</a>
		</td>
		<td width="10px">
			Eliminar 
		</td>
		</tr>
        @endforeach

	</tbody>
     

	</table>
	{{$students->render()}}

</div>

@endsection


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CREAR ESTUDIANTES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
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
			<th>Autorizacion Datos Personales</th>
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
			<a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-default">
				Ver
			</a>
		</td>
		<td width="10px">
			<a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-default">
				Editar
			</a>
		</td>
		<td width="10px">
			Eliminar 
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