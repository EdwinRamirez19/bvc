@extends('layouts.master')

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
                <a href=" {{route ('users.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DEL USUARIO
                    <small>Lista de forma general de usuarios</small>
                </h2>
            </div>
         <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                       
                        <th>Nombre</th>
                        <th>Email</th>
                   
                        
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                       
                        

                        
                    </tr>
                  
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>
@endsection