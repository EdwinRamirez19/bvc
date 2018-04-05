@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
				<a href=" {{route ('schools.create') }}" class="btn  btn-info pull-right">Crear Institucion</a>
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
                    </tr>
                </thead>
                <tbody>
                @foreach($schools as $school)
                    <tr>
                        <td>{{$school->id}}</td>
                        <td>{{$school->nombre_esc}}</td>
                        <td>{{$school->descripcion_esc}}</td>
                        <td>{{$school->ciudad_esc}}</td>
                        
                        <td width="10px">
                             <a href="{{ route('schools.show', $school->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                            </a>
                        </td>
                        <td width="10px">
                             <a href="{{ route('schools.edit', $school->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            </a>
                        </td>
                        <td width="10px">
                            {!! Form::open(['route' => ['schools.destroy', $school->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
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