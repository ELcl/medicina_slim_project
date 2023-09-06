{{-- <!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>{{ 'Lista de Usuarios' }}</title>

       
    </head>
    <body>
        
            <table>
                <thead>
                    <tr">
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Residencia</th>
                    </tr>                    
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{$paciente['nombre']}}</td>
                        <td>{{$paciente['edad']}}</td>
                        <td>@if($paciente['sexo']=='h')
                            {{'Hombre'}}
                            @else
                            {{'Mujer'}}
                            @endif
                        </td>
                        <td>{{$paciente['residencia']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h1 style="font-family: cursive">
                Hello world!
            </h1>  
        
    </body>
</html> --}}
{{-- <!doctype html>
<html lang="en">
    
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <table class="table" border="2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html> --}}
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
    <table>
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Sospecha</th>
                <th>Reincidencia</th>
                <th>Transferencia</th>
            </tr>                    
        </thead>
        <tbody>
            @foreach($casos as $caso)
            <tr>
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
