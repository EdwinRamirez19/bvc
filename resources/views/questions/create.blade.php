@extends('layouts.master')

@section('content')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Completar Encuesta
                            </h2>
                        </div>

                        <div class="body">
                            @include('questions.form')
                        </div>
                    </div>
                </div>
            </div>
@endsection