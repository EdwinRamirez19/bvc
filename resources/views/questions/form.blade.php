
<form method="POST" id="fx" action="{{ route('questions.store') }}" class="smart-form">

{{ csrf_field() }}
    <div class="row clearfix">
            <div class="col-md-12"><center><p><b>DEL 1(peor) a 5(mejor) Califica el Evento</b></p></center><hr>
            </div>

            <div class="col-md-2">
                <p><b>->Conferencista:</b></p>           
            </div>
    
    <div class="col-md-3">
        <div class="form-group">
                +Dominio del Tema
                {{ Form::select('conf1', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
                +Comunicacion con el Grupo
                {{ Form::select('conf2', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
        </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    +Ejemplos Utilizados
                    {{ Form::select('conf3', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    
     
    <div class="col-md-2">
            <p><b>->Tema:</b></p>           
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    +Relevancia
                    {{ Form::select('tem1', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    +Interes
                    {{ Form::select('tem2', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    +Practicidad del tema
                    {{ Form::select('tem3', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    <div class="col-md-2">
            <p><b>->Logistica:</b></p>           
    </div>
    <div class="col-md-3">
            <div class="form-group">
                    +Duracion
                    {{ Form::select('log1', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    +Cumplimiento de horario
                    {{ Form::select('log2', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    +Lugar del Evento
                    {{ Form::select('log3', ['UNO' => '1', 'DOS' => '2', 'TRES' => '3', 'CUATRO' => '4','CINCO' => '5',]) }} 
            </div> 
    </div>
    <div class="col-md-12"><hr></div>

    <div class="col-md-9">
        <div class="form-group">
            <b>¿Tienes alguna sugerencia o comentario sobre este curso o conferencia?</b>
            {{ Form::text('sugerencia' ) }} 
        </div> 
    </div>

    <div class="col-md-3">
            <div class="form-group">
                    <b>¿Como te Enteraste?</b>
                    {{ Form::select('enterar', [null,'FACEBOOK', 'YOUTUBE', 'TWITTER', 'PAGINA WEB']) }} 
            </div> 
    </div>
   
    <div class="col-md-5">
            <div class="form-group">
                    <b>¿Te enteraste por otro medio?¿Cual?</b>
                    {{ Form::text('medios') }} 
            </div> 
    </div>

    <div class="col-md-4">
            <div class="form-group">
                    <b>¿Quien te envio la imformacion?</b>
                    {{ Form::select('informacion', [null,'BVC', 'PUNTO BVC', 'UNIVERSIDAD', 'AMIGO',]) }} 
            </div> 
    </div>
    
    <div class="col-md-3">
            <div class="form-group">
                    <b>¿Te envio la informacion alguien mas , Quien?</b>
                    {{ Form::text('medios1') }} 
            </div> 
    </div>
   
    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Haz invertido alguna vez en la bolsa?</b>
                    {{ Form::select('validar1', ['SI','NO',]) }} 
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Como le gustaria pagar los cursos?</b>
                    {{ Form::text('cursos') }} 
            </div> 
    </div>
    <div class="col-md-12"><hr></div>
    <div class="col-md-6">
            <div class="form-group">
                    ¿SI TE ENCUENTRAS TOMANDO UN CURSO DE LA BVC, DE <b>lunes a viernes</b>,en que horario te gustaria que se realizara el curso?
                    {{ Form::select('hora', [null,'7 a 9am','8 a 10am','2 a 4pm', '4 a 6pm', '6 a 8pm','6 a 9pm','7 a 9pm']) }} 
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    ¿Asistirias a un curso/conferencia el <b>fin de semana</b>?
                    {{ Form::select('validar2', ['SI','NO',]) }} 
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿El fin de semana</b>,en que horario te gustaria que se realizara el curso?
                    {{ Form::select('hora1', [null,'7 a 9am','7 a 10am','7 a 11am', '7 a 12am', '7am a 1pm','8 a 10am','8 a 11am','8 a 12am','8am a 1pm']) }} 
            </div> 
    </div>

    <div class="col-md-6">
            <div class="form-group">
                    <b>¿Te interesa conocer algun tema especifico sobre la bolsa y los mercados?</b>
                    {{ Form::text('temas') }} 
            </div> 
    </div>
<div class="col-md-12"><hr></div>
    </div>
    <footer>
        <button type="summit" class="btn btn-primary waves-effect">Guardar</button>
        <button type="button" class="btn btn-default" onclick="window.history.back();">
		Cancelar
		</button>
    </footer>
</form>