@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-14 col-md-14 col-sm-14 col-xs-14">
         <div class="card">
             <div class="header">

                @can('events.create')
				    <a href=" {{route ('events.create') }}" class="btn  btn-info pull-right">Crear Evento</a>
                @endcan
                <h2>
                 DATOS DE LOS EVENTOS
                    <small>Lista de forma general de Eventos</small>
                </h2>
                <br>
               
                <div class="form-group form-float">
                    <div class="form-line focused primary">
                        <input class="form-control" id="search" type="text" placeholder="Search..">
                    </div>
                    </div>
                </div>
           
            
		 <div class="body table-responsive">
            <table class="table" id="table">
                 <thead>
                     <tr>
                       
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
                       
                        <td>{{$event->nombre_even}}</td>
                        <td>{{$event->descripcion_even}}</td>
                        <td>{{$event->tipo_even}}</td>
                        <td>{{$event->organizador_even}}</td>
                        <td>{{$event->lugar_even}}</td>
                        <td>{{$event->fecha_even}}</td>
                        <td>{{$event->hora_even}}</td>
                        
                        <td width="10px">
                            <div>
                                @can('events.show')
                                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-primary">
                                    Ver Evento
                                    </a>
                                    
                                @endcan
                            </div>
                            <div>

                                  <br>
                                <a href="{{ route('excel2',[$event->id , 'type' => 'xls'] )}}" class="btn btn-sm btn-primary">
                                    Excel encuesta 
                                </a>
                               
                            </div>
                        </td>
                        <td width="10px">
                            <div>
                            @can('events.edit')
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            
                                </a>
                            @endcan
                            </div>
                            <div>
                                <br>
                                <a href="{{ route('excel',[$event->id , 'type' => 'xls'] )}}" class="btn btn-sm btn-teal">
                                    Excel
                                </a>
                            </div>
                        </td>
                        <td width="10px">
                            <div>
                            @can('events.destroy')
                                {{ Form::open(['route' => ['events.destroy', $event->id], 'method' => 'delete']) }}
                                {{ Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) }}
                            {{ Form::close() }}

                            @endcan
                            </div>
                            <div>
                                <br>
                                <a href="{{ route('enviar-email' )}}" class="btn btn-sm btn-danger" >
                                    &nbsp Invitar  &nbsp
                                </a>
                            </div>
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
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>

$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
@endsection