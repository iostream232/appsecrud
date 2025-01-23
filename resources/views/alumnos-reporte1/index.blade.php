<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Reporte de Alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Alumno</th>
                <th>Nombre del Tutor 1</th>
                <th>Teléfono del Tutor 1</th>
                <th>Nombre del Tutor 2</th>
                <th>Teléfono del Tutor 2</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre_alumno }}</td>
                <td>{{ $alumno->nombre_tutor_1 }}</td>
                <td>{{ $alumno->telefono_tutor_1 }}</td>
                <td>{{ $alumno->nombre_tutor_2 }}</td>
                <td>{{ $alumno->telefono_tutor_2 }}</td>
                <td>{{ $alumno->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
