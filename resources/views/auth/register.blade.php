@extends('auth.layouts')
 
@section('class-page','signup-page')
@section('class-box','signup-box')

@section('content')
<div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="{{ route('register') }}">
                	@csrf
                    <div class="msg">Registrate con nosotros</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Nombre" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="correo" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="contraseña" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirmar contraseña" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">acepta los <a href="javascript:void(0);">terminos</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Ingresa</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">Eres nuevo miembro?</a>
                    </div>
                </form>
                <a href="{{ url('/register') }}" class="text-center pull-right">Registrate!!</a><br><br><br>
            </div>
        </div>
@endsection
