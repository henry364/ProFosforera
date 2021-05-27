<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIMIENTO No. {{$movimiento->id}}</title>
</head>

<body>
<img align="center" src="img/logo-2.jpg" width="300" height="100">
<h1 align="right" style="font-size:150%;">MOVIMIENTO No. {{$movimiento->id}}</h1>
<h1 align="right" style="font-size:100%;">FECHA DEL MOVIMIENTO: {{$movimiento->fecha_movimiento}}</h1>
<hr>
<br>
<h1 align="left" style="font-size:100%;">NOMBRE DEL PRODUCTO TERMINADO: {{$acabado->nombre_acabado}}</h1>
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
                    @foreach($movimiento->productos as $item)
                    <li>{{ $item->nombre_producto}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul>
                    @foreach($movimiento->productos as $item)
                    <li>{{ $item->pivot->cantidad}}</li>
                    @endforeach
                </ul>
            </td>             
        </tr>
    </tbody>
</table>
<hr>
<br>
<h1 align="left" style="font-size:100%;">DESCRIPCIÓN DEL MOVIMIENTO: {{$movimiento->descripcion_movimiento}}</h1>
<br>
<hr>

</body>
</html>