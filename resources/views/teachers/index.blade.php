@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
         <div class="card">
             <div class="header">
                @can('teachers.create')
				    <a href=" {{route ('teachers.create') }}" class="btn  btn-info pull-right">Crear Docente
                    </a>
                @endcan
                <h2>
                 DATOS DEl DOCENTE
                    <small>Lista de forma general los datos de Docentes</small>
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
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{$teacher->id}}</td>
                        <td>{{$teacher->nombres_prof}}</td>
                        <td>{{$teacher->apellidos_prof}}</td>
                        <td>{{$teacher->identificacion_prof}}</td>
                        <td>{{$teacher->celular_prof}}</td>
                        <td>{{$teacher->correo_prof}}</td>
                        
                        <td width="10px">
                            @can('teachers.show')
                                <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('teachers.edit')
                                <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('teachers.destroy')
                                {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'DELETE']) !!}
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
                {{$teachers->render()}}
			</div>
		</div>
	</div>
</div>
@endsection