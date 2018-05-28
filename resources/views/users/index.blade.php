@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">


                <h2>
                 DATOS DE LOS USUARIOS
                    <small>Lista de forma general de useros</small>
                </h2>
            </div>
		 <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                        <th width="10px">id</th>
                        <th>Nombre</th>
                        <th colspan="3">&nbsp;</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>

                        
                        
                        <td width="10px">
                            @can('users.show')
                                 <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">
                                 Ver
                                 </a>
                             @endcan
                        </td>
                        <td width="10px">
                            @can('users.edit')
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-teal">
                                 Editar
                            
                                </a>
                            @endcan
                        </td>
                        <td width="10px">
                            @can('users.destroy')
                                {{ Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
                                {{ Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) }}
                            {{ Form::close() }}

                            @endcan
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$users->render()}}
			</div>
		</div>
	</div>
</div>
@endsection