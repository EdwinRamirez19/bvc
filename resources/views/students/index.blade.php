@extends('layouts.master')

@section('content')



 {{--<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						   <a href=" {{route ('students.create') }}" class="btn  btn-info pull-right">Crear Estudiante</a>
						    <h2>
                                CREAR ESTUDIANTES
							</h2>
                             
                        </div>
                        <div class="body table-bordered">
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
			<a href="{{ route('students.show', $student->id) }}" class="btn btn-sm btn-primary">
				Ver
			</a>
		</td>
		<td width="10px">
			<a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-teal">
				Editar
			</a>
		</td>
		<td width="10px">
			<a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-danger">
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
		@endsection--}}

         <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
						<a href=" {{route ('students.create') }}" class="btn  btn-info pull-right">Crear Estudiante</a>
                            <h2>
                                BASIC TABLES
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                        </div>
		 <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>USERNAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
         </div>
						@endsection