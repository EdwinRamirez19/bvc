@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">   
         <div class="card">
             <div class="header">
                @can('schools.create')
				    <a href=" {{route ('schools.create') }}" class="btn  btn-info pull-right">Crear Institucion
                    </a>
                @endcan
                <h2>
                 DATOS DE LA ESCUELA
                    <small>Lista de forma general los datos de la escuela</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Ciudad</th>
                         <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($schools as $school)
                    <tr>
                        <td>{{$school->id}}</td>
                        <td>{{$school->nombre_esc}}</td>
                        <td>{{$school->descripcion_esc}}</td>
                        <td>{{$school->ciudad_esc}}</td>
                        <td>{{$school->email}}</td>
                        
                        <td width="10px">
                            @can('schools.show')
                                <a href="{{ route('schools.show', $school->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('schools.edit')
                                <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('schools.destroy')
                                {!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'DELETE']) !!}
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
                {{$schools->render()}}
			</div>
		</div>
	</div>
</div>
@endsection