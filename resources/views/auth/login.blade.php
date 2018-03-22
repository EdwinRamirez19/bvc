@extends('auth.layouts')

@section('class-page','signup-page')
@section('class-box','signup-box')

@section('content')

<div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                	@csrf
                    <div class="msg" style="color:#E91E63;"><big>Ingresa Tus Datos Para Iniciar Sesion</div></big>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Nombre de Usuario (correo electronico)" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink">
                            <label for="remember">Recordarme el Registro</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">INGRESA</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection