@extends('layouts.app')

@section('content')
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
        @endforeach

	</tbody>
     

	</table>

</div>

@stop