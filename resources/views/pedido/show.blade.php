<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido No. {{$pedido->id}}</title>
</head>

<body>
<img align="center" src="img/logo-2.jpg" width="300" height="100">

    <form action="/pedido/{{$pedido->id}}" method="post">

    <h1 align="right" style="font-size:150%;">ORDEN DE PEDIDO No. {{$pedido->id}}</h1>
    <h1 align="right" style="font-size:100%;">FECHA DEL PEDIDO: {{$pedido->fecha_pedido}}</h1>
    <hr>
    <br>
    <form action="/pedido/{{$pedido->cliente_pedido}}" method="post">
    <h1 align="left" style="font-size:100%;">NOMBRE DEL CLIENTE: {{$cliente->nombre_cliente}}</h1>
    <h1 align="left" style="font-size:100%;">RTN DEL CLIENTE: {{$cliente->rtn_cliente}}</h1>
    <h1 align="left" style="font-size:100%;">TELÉFONO DEL CLIENTE: {{$cliente->telefono_cliente}}</h1>
    <h1 align="left" style="font-size:100%;">CORREO ELECTRÓNICO DEL CLIENTE: {{$cliente->correo_cliente}}</h1>
    <br>
    <hr>
    <table class="table table-striped table-bordered table-condensed table-hover" cellspacing="0" cellpadding="0" width="100%">
        <thead>
            <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <ul>
                        @foreach($pedido->productos as $item)
                        <li>{{ $item->nombre_producto}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach($pedido->productos as $item)
                        <li>{{ $item->pivot->cantidad}}</li>
                        @endforeach
                    </ul>
                </td>             
            </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <h1 align="left" style="font-size:100%;">DESCRIPCIÓN DEL PEDIDO: {{$pedido->descripcion_pedido}}</h1>
    <br>
    <hr>
</body>
</html>