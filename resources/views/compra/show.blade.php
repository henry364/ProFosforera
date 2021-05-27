<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra No. {{$compra->id}}</title>
</head>

<body>
<img align="center" src="img/logo-2.jpg" width="300" height="100">
<h1 align="right" style="font-size:150%;">ORDEN DE COMPRA No. {{$compra->id}}</h1>
<h1 align="right" style="font-size:100%;">FECHA DE LA COMPRA: {{$compra->fecha_compra}}</h1>
<hr>
<br>
<h1 align="left" style="font-size:100%;">NOMBRE DEL PROVEEDOR: {{$proveedor->nombre_proveedor}}</h1>
<h1 align="left" style="font-size:100%;">RTN DEL PROVEEDOR: {{$proveedor->rtn_proveedor}}</h1>
<h1 align="left" style="font-size:100%;">IDENTIDAD DEL PROVEEDOR: {{$proveedor->identidad_proveedor}}</h1>
<h1 align="left" style="font-size:100%;">TELEFONO DEL PROVEEDOR: {{$proveedor->telefono_proveedor}}</h1>
<br>
<hr>
<table class="default" cellspacing="0" cellpadding="0" width="100%">

        <tr>
            <th>PRODUCTO</th>
            <th>CANTIDAD</th>
        </tr>


    <tbody>
        <tr>
            <td>
                <ul>
                    @foreach($compra->productos as $item)
                    <li>{{ $item->nombre_producto}}</li>
                    @endforeach
                </ul>
            </td>
            <td>
                <ul>
                    @foreach($compra->productos as $item)
                    <li>{{ $item->pivot->cantidad}}</li>
                    @endforeach
                </ul>
            </td>             
        </tr>
    </tbody>
</table>
<hr>
<br>
<h1 align="left" style="font-size:100%;">DESCRIPCIÓN DE LA COMPRA: {{$compra->descripcion_compra}}</h1>
<br>
<hr>

</body>
</html>