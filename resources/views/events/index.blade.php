@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">

                @can('events.create')
				    <a href=" {{route ('events.create') }}" class="btn  btn-info pull-right">Crear Evento</a>
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
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Organizador</th>
                        <th>Lugar</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->nombre_even}}</td>
                        <td>{{$event->descripcion_even}}</td>
                        <td>{{$event->tipo_even}}</td>
                        <td>{{$event->organizador_even}}</td>
                        <td>{{$event->lugar_even}}</td>
                        <td>{{$event->fecha_even}}</td>
                        <td>{{$event->hora_even}}</td>
                        
                        <td width="10px">
                            @can('events.show')
                                 <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                                 </a>
                             @endcan
                        </td>
                        <td width="10px">
                            @can('events.edit')
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('events.destroy')
                                {{ Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) }}
                                {{ Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) }}
                            {{ Form::close() }}

                            @endcan
                        </td>

                         <td width="10px">

                                <a href="{{ route('enviar-email' )}}" class="btn btn-sm btn-teal">
                                invitar
                            </a>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$events->render()}}
			</div>
		</div>
	</div>
</div>
@endsection