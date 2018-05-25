@extends('layouts.master')

@section('content')

                

  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
        <a href=" {{route ('questions.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DE LA ENCUESTA
                    
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
                        <th>Duracion</th>

                        
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td>{{ $question->id }}</td>
                        <td>{{ $question->conf1 }}</td>
                        <td>{{ $question->conf2 }}</td>
                        <td>{{ $question->conf3 }}</td>
                        <td>{{ $question-> tem1 }}</td>
                        <td>{{ $question-> tem2 }}</td>
                        <td>{{ $question-> tem3 }}</td>
                        <td>{{ $question-> log1 }}</td>
                    </tr>
                   
                    </tbody>
                </table>
                
      </div>
    </div>
  </div>
</div>

@endsection