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
            <td>Nombre Producto</td>
            <td>Costo</td>
            <td>Venta</td>
            <td>Stock</td>
            </tr>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->id }} </td>
                    <td>{{ $row->nombre_producto }}</td>
                    <td>{{ $row->precio_costo }}</td>
                    <td>{{ $row->precio_venta }}</td>
                    <td>{{ $row->stock }}</td>
                    <td><button id="eliminar" onclick="eliminar({{$row->id}});">Eliminar</button></td>
                </tr>
            @endforeach
    </body>
</html>
