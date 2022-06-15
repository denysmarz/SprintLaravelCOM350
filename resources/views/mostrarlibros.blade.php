<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
  <h1>Mi Organizador Personal</h1>
  <div class="lugar">
  <form  action="mostrar.php" method="GET">
        <label for="buscar">Buscador</label>
        <input type="text" name="buscar" value="<?php echo isset($buscar) ? $buscar : ''; ?>">
        <input type="submit" value="buscar">
    </form>
  </div>
</header>

<nav>
  <ul>
    <li><a href="">Registrar Libro</a><br></li>
    <li><a href="">Crear Estante</a></li>
    <li><a href="">Mostrar</a></li>
    <li><a href="">Estadistica</a></li>
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

    <center>
    <table style="text-align: center;" border="1">
    <thead>
        <tr>
            <th>ID </th>
            <th><a href="">Nombre</a></th>
            <th><a href="">Fecha</a> </th>
            <th><a href="">Autor</a> </th>
            <th>Operaciones</th>

        </tr>
        </thead>
        <tbody>
        @foreach($documentos as $documento)
        
            <tr>
                <td>{{ $documento->id }}</td>
                <td>{{ $documento->NombreTex }}</td>
                <td>{{ $documento->fecha }}</td>
                <td>{{ $documento->autor }}</td>               
                <td>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                </td>

            </tr>
            @endforeach 
        </center>
    
</body>
</html>
