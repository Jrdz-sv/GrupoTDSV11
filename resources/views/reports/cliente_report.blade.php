<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <h1>Listado de Clientes</h1>
    <hr>
    <br>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">C&oacute;digo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            {{-- <th colspan="2" scope="col">Cliente</th> --}}
          </tr>
        </thead>
        <tbody>

            @foreach($dataC as $item)
            <tr>
                <td>{{$item['Id_Cliente']}}</td>
                <td>{{$item['Nombre']}}</td>
                <td>{{$item['Apellido']}}</td>
                <td>{{$item['Fecha_Nac']}}</td>
                {{-- <td>{{$item['Observaciones']}}</td> --}}

              </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>