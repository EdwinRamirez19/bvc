@extends('layouts.index')

@section('content')

<div class="container">
	<div class="row">
		<div class=" col-md-8 col-md-offset-2">
     <div class="panel panel-default">
     	<div class="panel-heading">
     		Listado de estudiantes
     		<a href="{{route('students.create')}}" class="btn btn-sm btn-primary pull-right">
     			Crear
     		</a> 
     	</div>
     </div>
 </div>
</div>
</div>
<div class="panel-body">
	<table class="table table-striped table-hover">
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
		</tr>
		<td width="10px">
			<a href="{{route('students.show', $student->id)}}" class="btn btn-sm btn-default">
				Ver
			</a>
		</td>
		<td width="10px">
			<a href="{{route('students.edit', $student->id)}}" class="btn btn-sm btn-default">
				Editar
			</a>
		</td>
		<td width="10px">
			Eliminar 
		</td>
        @endforeach

	</tbody>
     

	</table>
	{{$students->render()}}

</div>

@endsection