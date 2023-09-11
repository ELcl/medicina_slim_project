
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <title>Title</title>

    <style>
      table {
   width: 100%;
   border: 1px solid #000;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
}
    </style>

</head>
<body>
  <h1><center>Datos - Casos de Violencia</center></h1>
  <h2>Por Municipios</h2>
  <table>
    <thead>
        <tr>
            <th>Residencia</th>
            <th>Número de Casos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($consulta as $residencia => $datosPacientes)
            <tr>
                <td>{{ $residencia }}</td>
                <td>{{ count($datosPacientes) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h2>Total</h2>
    <table>
      <thead>
          <tr>
              <th>Nro</th>
              <th>Municpios</th>
              <th>Sospecha</th>
              <th>Reincidencia</th>
              <th>Nro Transferencias</th>
          </tr>                    
      </thead>
      <tbody>
          @foreach($casos as $caso)
          <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$caso['tipo']}}</td>
              <td>
                  @if($caso['sospecha']=='on')
                                    SI
                                  @else
                                  NO
                                  @endif
              </td>
              <td>
                  @if($caso['reincidencia']=='on')
                                    <span class="material-symbols-outlined">
                                    SI
                                  @else
                                  NO
                                  @endif
              </td>
              <td>{{$caso['transferencia']}}</td>
          </tr>
          @endforeach
      </tbody>
  </table>


</body>
</html>
