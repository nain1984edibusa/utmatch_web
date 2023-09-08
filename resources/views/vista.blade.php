<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Modelo-vista-controlador</title>
    </head>
    <body>
        <h1>Usuario</h1>
        <p class="card-text">
        @foreach($data as $row)
                <tr>
                    <td>{{ $row->id }} </td>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->apellido }}</td>
                    <td><button id="eliminar" onclick="eliminar({{$row->id}});">Eliminar</button></td>
                </tr>
            @endforeach
            </p>
    </body>
</html>