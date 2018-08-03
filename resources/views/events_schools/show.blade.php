@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
                <a href=" {{route ('events_schools.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DEL EVENTO
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
               
                    <tr>
                        <td>{{$event_school->id}}</td>
                        <td>{{$event_school->nombre_esc}}</td>
                        <td>{{$event_school->nombre_even}}</td>
                        <td width="10px">
                            
                            <a href="{{ route('events_schools.edit', $event_school->id) }}" class="btn btn-sm btn-teal">
                                Editar
                            </a>
                            
                        </td>
                        
                    </tr>
                  
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>
@endsection