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
        <h2>Crear Estante</h2>
        <div id="form">
        <form action="{{route('estantes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>Tema</p>
        <select name="tema_id" id="tema_id">
            @foreach($temas as $tema)
                <option value="{{$tema->id}}">{{$tema->nombre}}</option>
            @endforeach
        </select> 
        <br>
        <p>Cantidad Columnas</p>
        <input type="number" name="columna" id="columna"> <br>
        <p>Tamaño de fila</p>
        <input type="number" name="fila" id="fila"> <br><br>
        <input type="submit" value="Registrar">
        </form>
        </div>
    
    </div>
    
    
    
</body>
</html>