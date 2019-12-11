<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPORT MACHINES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div>
            <h1>Reportes de Maquinas</h1>
            <table border="4">
                <tr>
                    <td>DATO</td>
                    <td>FECHA</td>
                    <td>HORA INGRESO</td>
                    <td>SEDE</td>
                    <td>MAQUINAS</td>
                    <td>ESTADO DE MAQUINAS</td>
                    <td>COMPAÑIA</td>
                    <td>TÉCNICO</td>
                </tr>
                @foreach($reports as $info)
                <tr>
                    <th>{{$info->date_inform}}</th>
                    <th>{{$info->date}}</th>
                    <th>{{$info->date_time}}</th>
                    <th>{{$info->sede->name_sede}}</th>
                    <th>{{$info->sede->number_machine}}</th>
                    <th>{{$info->sede->machine->state}}</th>
                    <th>{{$info->sede->company->name}}</th>
                    <th>{{$info->technical->name}}</th>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>