<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo estante</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
  <h1>Mi Organizador Personal</h1>
  <div class="lugar">
  <!--<form  action="" method="GET">
        <label for="buscar">Buscador</label>
        <input type="text" name="buscar" value="">
        <input type="submit" value="buscar">
    </form>-->
  </div>
</header>

<nav>
  <ul>
  <li><a href="{{route('documentos.create')}}">Registrar Libro</a><br></li>
    <li><a href="{{route('estantes.create')}}">Crear Estante</a></li>
    <li><a href="{{route('documentos.index')}}">Mostrar</a></li>
    <!--<li><a href="">Estadistica</a></li>
    <li><a href="">Reporte</a></li>-->
  </ul>
  <div class="hide">
    <i class="fa fa-bars" aria-hidden="true"></i> Menu
  </div>
</nav>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script>
    $(".hide").on('click', function() {
      $("nav ul").toggle('slow');
    })
  </script>

    <div id="contenedor">
        <h2>Registrar Libro</h2>
        <div id="form">
        <form action="{{route('documentos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <p>Nombre:</p> 
        <input type="text" name="nombre" id="nombre"> <br>
		<p>Autor:</p>  
        <input type="text" name="autor" id="autor"> <br>
		<p>Fecha:</p>  
        <input type="date" name="fecha" id="fecha"> <br>
        <p>Estante</p>
        <select name="estante_id" id="estante_id">
            @foreach($estantes as $estante)
                <option value="{{$estante->tema_id}}">{{$estante->nombre}}</option>
            @endforeach
        </select> 
        <br>
        <br>
        <input type="submit" value="Registrar">
        <br><br>
        </form>
        </div>
    
    </div>
    
    
    
</body>
</html>