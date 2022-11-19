<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi escuela App</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Mi escuelita</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Alumnos
            </a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/alumnos')}}">Consultar</a>
            <a class="dropdown-item" href="{{url('/alumno/registrar')}}">Registrar</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" >Grupos</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/alumnos')}}">Consultar</a>
            <a class="dropdown-item" href="{{url('/alumno/registrar')}}">Registrar</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" >Especialidades</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/especialidades')}}">Consultar</a>
            <a class="dropdown-item" href="{{url('/especialidad/registrar')}}">Registrar</a>
        </li>
        </ul>>
        <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
    {{Auth::user()->name}}
    </button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('/profile')}}">Perfil</a>
    <form method="POST" action="{{route('logout')}}">
        @csrf
        <a href="{{url('/logout')}}" class="dropdown-item"
                onclick="event.preventDefault();
                    this.closest('form').submit()";>
        {{ __('Cerrar sesión') }}

        </a>
    </form>
  </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @yield('contenido')

            </div>
        </div>
    </div>
    <div class="text-center">
    <footer>
        <hr>
        MiEscuelitaApp &copy; 2022
    </footer>
</div>





<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>