@extends('layouts.master')

@section('content')

  {{ csrf_field() }}
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
        <a href=" {{route ('questions.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DE LA ENCUESTA
                    
                </h2>
            </div>
          </div>
        </div>
      </div>



    <div class="row clearfix">
            <div class="col-md-12"><center><p><b>DEL 1(peor) a 5(mejor) Califica el Evento</b></p></center><hr>
            </div>

            <div class="col-md-2">
                <p><b>->Conferencista:</b></p>           
            </div>
    
    <div class="col-md-3">
        <div class="form-group">
                <b>+Dominio del Tema:</b>
                <td>{{ $question->conf1 }}</td>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
                <b>+Comunicacion con el Grupo:</b>
                <td>{{ $question->conf2 }}</td>
        </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    <b>+Ejemplos Utilizados:</b>
                    <td>{{ $question->conf3 }}</td>
                    
            </div> 
    </div>

    
     
    <div class="col-md-2">
            <p><b>->Tema:</b></p>           
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    <b>+Relevancia:</b>
                     <td>{{ $question-> tem1 }}</td>
                    
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                   <b> +Interes:</b>
                     <td>{{ $question-> tem2 }}</td>
                   
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    <b>+Practicidad del tema:</b>
                        <td>{{ $question-> tem3 }}</td>
            </div> 
    </div>

    <div class="col-md-2">
            <p><b>->Logistica:</b></p>           
    </div>
    <div class="col-md-3">
            <div class="form-group">
                    <b>+Duracion:</b>
                 <td>{{ $question-> log1 }}</td> 
            </div> 
    </div>

    <div class="col-md-4">
            <div class="form-group">
                   <b> +Cumplimiento de horario:</b>
                   <td>{{ $question-> log2 }}</td>
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    <b>+Lugar del Evento:</b>
                   <td>{{ $question-> log3 }}</td> 
            </div> 
    </div>
    <div class="col-md-12"><hr></div>

    <div class="col-md-9">
        <div class="form-group">
            <b>¿Tienes alguna sugerencia o comentario sobre este curso o conferencia?-></b>
            <td>{{ $question->sugerencia }}</td>
        </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    <b>¿Como te Enteraste?-></b>
                    <td>{{ $question-> enterar }}</td> 
            </div> 
    </div>
   
    <div class="col-md-5">
            <div class="form-group">
                    <b>¿Te enteraste por otro medio?¿Cual?-></b>
                    <td>{{ $question-> medios }}</td>
            </div> 
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    <b>¿Quien te envio la imformacion?-></b>
                    <td>{{ $question-> informacion }}</td>
            </div> 
    </div>
    
    <div class="col-md-3">
            <div class="form-group">
                    <b>¿Te envio la informacion alguien mas , Quien?-></b>
                    <td>{{ $question-> medios1 }}</td>
            </div> 
    </div>
   
    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Haz invertido alguna vez en la bolsa?-></b>
                    <td>{{ $question-> validar1 }}</td>
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Como le gustaria pagar los cursos?-></b>
                    <td>{{ $question-> cursos }}</td> 
            </div> 
    </div>
    <div class="col-md-12"><hr></div>
    <div class="col-md-6">
            <div class="form-group">
                   <b> ¿SI TE ENCUENTRAS TOMANDO UN CURSO DE LA BVC, DE lunes a viernes>,en que horario te gustaria que se realizara el curso?-></b
                    <td>{{ $question-> hora }}</td>
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                   <b> ¿Asistirias a un curso/conferencia el fin de semana?-></b>
                    <td>{{ $question-> validar2 }}</td>
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿El fin de semana,en que horario te gustaria que se realizara el curso?-></b>
                    <td>{{ $question-> hora1 }}</td> 
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Te interesa conocer algun tema especifico sobre la bolsa y los mercados?-></b>
                    <td>{{ $question-> temas }}</td>
            </div> 
    </div>

@endsection