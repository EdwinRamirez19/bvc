@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
                @can('questions.create')
				    <a href=" {{route ('questions.create') }}" class="btn  btn-info pull-right">Diligenciar Encuesta
                    </a>
                @endcan
                <h2>
                 DATOS DE LA ENCUESTA
                    <small>Lista de forma general los datos de la encuesta</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">Id</th>
                        <th>Dominio del Tema Conferencista</th>
                        <th>Comunicacion con el Grupo</th>
                        <th>Ejemplos Utilizados</th>
                        <th>Relevancia</th>
                        <th>Interes</th>
                        <th>Practicidad del tema</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->conf1}}</td>
                        <td>{{ $question->conf2 }}</td>
                        <td>{{ $question->conf3 }}</td>
                        <td>{{ $question-> tem1 }}</td>
                        <td>{{ $question-> tem2 }}</td>
                        <td>{{ $question-> tem3 }}</td>
                        <td width="10px">
                            @can('questions.show')
                                <a href="{{ route('questions.show', $question->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                                </a>
                            @endcan
                        </td>
                       
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$questions->render()}}
			</div>
		</div>
	</div>
</div>
@endsection