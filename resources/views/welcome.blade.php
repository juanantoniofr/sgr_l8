@extends('layouts.app')

@section('head')

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <style>
  
        #font-lato {
            text-align: center;
            vertical-align: middle;
            font-weight: 100;
            font-family: 'Lato';
            font-size:56px;
            font-style: italic;
            color: #B0BEC5;
        }
    </style>
@stop

@section('title')
    SGR v1.2: wellcome
@stop

@section('content')

    <div class = "mt-5 mb-5">
      
        <p id = "font-lato">Sistema de Gestión de Reservas<br /> Facultad de Comunicación</p>
        <div class="col-md-12 col-sx-12 text-center" style = "">
            <a href="{{ route('sso-login')}}" class="btn btn-primary" style="margin-top:10px;width:25%;">Login</a>
        </div>
    </div>
@stop 