@extends('layouts.master')

@section('content')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Crear Estudiantes
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                           <form method="POST" id="fx" action="{{ route('students.store') }}" class="smart-form">
                        	{{ method_field('POST') }}
								{{ csrf_field() }}
                            <div class="row clearfix">


                                 <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Nombres" id="id" name="id">
                                            @foreach ($errors->get('nombres_est') as $message) 
                                                    <div class="note note-error">{{ $message }}</div>
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="input-group">

                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Nombres" id="nombres_est" name="nombres_est">
                                            @foreach ($errors->get('nombres_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Apellidos" id="apellidos_est" name="apellidos_est">
                                            @foreach ($errors->get('apellidos_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">perm_identity</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Identificacion" id="identificacion_est" name="identificacion_est" >
                                            @foreach ($errors->get('identificacion_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Celular" id="celular_est" name="celular_est">
                                            @foreach ($errors->get('celular_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="E-mail" id="correo_est" name="correo_est">
                                            @foreach ($errors->get('correo_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>
                                
                                 <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">mode_edit</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Firma" id="firma_est" name="firma_est">
                                            @foreach ($errors->get('firma_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">verified_user</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Autorizar"  id="autizacion_uso_datos_personales_est" name="autizacion_uso_datos_personales_est">
                                            @foreach ($errors->get('autizacion_uso_datos_personales_est') as $message) 
													<div class="note note-error">{{ $message }}</div>
												@endforeach
                                        </div>
                                    </div>
                                </div>


                               

                            </div>
                            <footer>
                            	
                            	 <button type="summit" class="btn btn-success waves-effect">Guardar</button>
                            	 <button type="button" class="btn btn-default" onclick="window.history.back();">
									Cancelar
								</button>
                            </footer>
                           
							</form>
                            
                        </div>
                    
                    </div>
                </div>
</div>

@endsection
