@extends('layouts.master')

@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="card">
             <div class="header">
                <a href=" {{route ('roles.index') }}" class="btn  btn-info pull-right">Atras</a>
                <h2>
                 DATOS DEL ROL
                    <small>Lista de forma general de roles</small>
                </h2>
            </div>
         <div class="body table-responsive">
            <table class="table">
                 <thead>
                     <tr>
                       
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Descripción</th>

                             
                         
                    
                   
                        
                    </tr>
                </thead>
                <tbody>
               
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>{{ $role->description }}</td>
                       
                        

                        
                    </tr>
                  
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>
@endsection