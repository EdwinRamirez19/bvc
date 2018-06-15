
@if(empty($event_schools))
<form method="POST" id="fx" action="{{ route('events_schools.store') }}" class="smart-form">
@else
<form method="POST" id="fx" action="{{ route('events_schools.update' , $event_school->id) }}" class="smart-form">
 {{ method_field('PUT') }}
@endif
	{{ csrf_field() }}


<div class="row clearfix">

     <div class="col-md-4">

        <div class="input-group">

            <span class="input-group-addon">
                <i class="material-icons">school</i>
            </span>
            <div class="form-line">
                <select name="schools_id" class="form-control" required>
                    <option>Instituciones</option>

                    @foreach($schools as $school)
                    <option value="{{$school['id']}}">
                        {{$school['nombre_esc']}}
                    </option>
                    @endforeach

                </select>
            </div>
        </div>
    </div>

    <div class="col-md-4">

        <div class="input-group">

            <span class="input-group-addon">
                <i class="material-icons">school</i>
            </span>
            <div class="form-line">
                <select name="events_id" class="form-control" required>
                    <option>Instituciones</option>

                    @foreach($events as $event)
                    <option value="{{$event['id']}}">
                        {{$event['nombre_even']}}
                    </option>
                    @endforeach

                </select>
            </div>
        </div>
    </div>

</div>



<footer>
	
	 <button type="summit" class="btn btn-primary waves-effect">Guardar</button>
	 <button type="button" class="btn btn-default" onclick="window.history.back();">
		Cancelar
	</button>
</footer>

</form>