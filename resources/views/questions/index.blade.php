@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
				<a href=" {{route ('questions.create') }}" class="btn  btn-info pull-right">Enviar Encuesta</a>
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
                    </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->conf1}}</td>
                        <td width="10px">
                             <a href="{{ route('questions.show', $question->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                            </a>
                        </td>
                        <td width="10px">
                             <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            </a>
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