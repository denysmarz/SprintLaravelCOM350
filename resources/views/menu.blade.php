<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<header>
  <h1>Mi Organizador Personal</h1>
  <div class="lugar">
  <form  action="mostrar.php" method="GET">
        <label for="buscar">Buscador</label>
        <input type="text" name="buscar" placeholder="Buscar" value="<?php echo isset($buscar) ? $buscar : ''; ?>">
        <input type="submit" value="buscar">
    </form>
  </div>
</header>

<nav>
  <ul>
    <li><a href="FormRegistro.php">Registrar Libro</a><br></li>
    <li><a href="Re_Estante.php">Crear Estante</a></li>
    <li><a href="{{route('documentos.index')}}">Mostrar</a></li>
    <li><a href="estadistica.php">Estadistica</a></li>
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
    
        
</body>

</html>