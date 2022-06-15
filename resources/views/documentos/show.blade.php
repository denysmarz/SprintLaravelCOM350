<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>ID: {{ $documento->id }}</li>
        <li>Nombre: {{ $documento->nombre }}</li>        
        <li>AUTOR: {{ $documento->autor }}</li>
        <li>AUTOR: {{ $documento->created_at }}</li>
        <li>ID ESTANTE: {{ $documento->estante_id }}</li>
    </ul>


</body>

</html>