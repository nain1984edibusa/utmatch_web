<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    </head>
    <body class="antialiased">
    <script>
            function eliminar(id){
                var ajax = new XMLHttpRequest();
                var ideliminar = id;    
                ajax.open("GET", "autentica/elimina?id="+ ideliminar);
                ajax.send();

                ajax.onreadystatechange = function(){
                    if(ajax.readyState == 4){
                        alert(ajax.responseText);
                    }
                }
            }
        </script>
        
        <table>
            <tr><td>Id</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Acción</td>
            </tr>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->usu_id }} </td>
                    <td>{{ $row->usu_nombre }}</td>
                    <td>{{ $row->usu_apellido }}</td>
                    <td><button id="eliminar" onclick="eliminar({{$row->usu_id}});">Eliminar</button></td>
                </tr>
            @endforeach
    </body>
</html>
