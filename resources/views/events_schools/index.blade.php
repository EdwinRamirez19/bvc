
@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
                
				    <a href=" {{route ('events_schools.create') }}" class="btn  btn-info pull-right">Relacionar
                    </a>
                <h2>
                    DATOS DE EVENTOS REALACIONADOS CON INSTITUCIONES
                    <small>Lista de forma general las escuelas que participan en un evento</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">id</th>
                        <th>Institucion</th>
                        <th>Evento</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($event_schools as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->nombre_esc}}</td>
                        <td>{{$dato->nombre_even}}</td>
                        
                        <td width="10px">
                            <a href="{{ route('events_schools.edit', $dato->id) }}" class="btn btn-sm btn-teal">
                                Editar
                            </a>
                        </td>
                        <td>
                            {!! Form::open(['route' => ['events_schools.destroy', $dato->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>                           
                            {!! Form::close() !!}
                        
                        </td>
                       
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$event_schools->render()}}
			</div>
		</div>
	</div>
</div>
@endsection