@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
         <div class="card">
             <div class="header">

                @can('events.create')
				    <a href=" {{route ('events_schools.create') }}" class="btn  btn-info pull-right">Crear Evento</a>
                @endcan
                <h2>
                 DATOS DE LOS EVENTOS
                    <small>Lista de forma general de Eventos</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">id</th>
                        <th>Institucion</th>
                        <th>Evento</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->nombre_esc}}</td>
                        <td>{{$dato->nombre_even}}</td>
                        
                            <td width="10px">
                           
                                <a href="{{ route('events_schools.edit', $dato->id) }}" class="btn btn-sm btn-default">
                                 Editar
                                </a>
                        
                        </td>


                          <td width="10px">
                           
                                {{ Form::open(['route' => ['events_schools.destroy', $dato->id], 'method' => 'delete']) }}
                                {{ Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) }}
                            {{ Form::close() }}

                          
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
               
			</div>
		</div>
	</div>
</div>
@endsection