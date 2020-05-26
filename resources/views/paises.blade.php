<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.css">
    <title>Paises</title>
</head>
<body>
    <h1 class ="text-danger">Lista de paises</h1>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais=>$infopais)
            <tr>
                <td>
                    {{  $pais  }}
                </td>
                <td>
                    {{  $infopais["capital"] }}
                </td>
                <td>
                    {{  $infopais["moneda"] }}
                </td>
                <td>
                    {{  $infopais["poblacion"] }}
                </td>
                <td>
                    <ul>
                        
                    @foreach ($infopais["ciudades"] as $ciudad)
                    <li>

                        {{ $ciudad }}
                    </li>   
                    @endforeach
                    
                    </ul>
                </td>
            </tr>
                
            @endforeach
        </tbody>

    </table>
    <table>
        <thead></thead>
    </table>

</body>
</html>