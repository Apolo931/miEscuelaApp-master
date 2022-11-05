@extends('master')

@section('contenido')
    <div class="jumbotron">
        <h1 class="display-4">Mi Escuelita app</h1>
        <p class="lead">Bienvenido a mi escuelita.com!</p>
        <hr class="my-4">
        <p>Aquí podrás encontrar todos los trámites eléctronicos relacionados a tu escuela. </p>
        <img src="{{asset('img/logo_home.jpg')}}" alt=""  width="500px">
    </div>
@stop