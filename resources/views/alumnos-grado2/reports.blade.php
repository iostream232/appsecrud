<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Registro de Estudiantes</title>  
    <style>  
        @font-face {  
            font-family: 'Ribera';  
            src: url('path/to/ribera-font.ttf') format('truetype');  
        }  

        body {  
            font-family: 'Ribera', sans-serif;  
            margin: 0;  
            padding: 0;  
            display: flex; /* Uso de flex */  
            flex-direction: column; /* Dirección de la flexión */  
            min-height: 100vh; /* Altura mínima de la vista */  
        }  

        .header {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
            width: 100%;  
            padding: 20px;  
        }  

        .logos-container {  
            display: flex;  
            justify-content: center;  
            align-items: center;  
        }  

        .logo {  
            max-width: 100%;  
        }  

        h2 {  
            margin: 0;  
            font-size: 24px;  
        }  

        p {  
            margin: 5px 0;  
            font-size: 14px;  
        }  

        table {  
            width: 100%;  
            border-collapse: collapse;  
            margin-top: 20px;  
            flex-grow: 1; /* Permite que la tabla crezca y empuje el footer hacia abajo */  
        }  

        th, td {  
            border: 1px solid #000;  
            padding: 10px;  
            text-align: left;  
        }  

        th {  
            background-color: #f2f2f2;  
            color: #000;  
        }  

        .footer {  
            background-color: rgb(255, 255, 255);  
            color: rgb(127, 127, 127);  
            padding: 10px;  
            text-align: center;  
            position: relative; /* Cambiar a relativo para el contenido dentro */  
            bottom: 0;   
            width: 100%;  
        }  

        .watermark {  
            position: fixed;  
            top: 45%; /* Ajusta el valor como necesites */  
            left: 50%;  
            transform: translate(-50%, -50%);  
            opacity: 0.1;  
            font-size: 200px;  
            color: #000;  
        }  

        @media print {  
            body {  
                margin: 0;  
            }  

            .footer {  
                position:fixed;
                left:0px;
                bottom:0px;
                height:30px;
                width:100%;
                background:#999; 
            }  

                .watermark {  
                    display: none; /* Oculatar la marca de agua al imprimir */  
                }  
        }  
    </style>  
</head>  
<body>  

    <div class="header">  
        <div class="logos-container">  
            <img src="img/pdf/ss.png" alt="Logo" class="logo" style="width: 2000px; height: 100px; display: block; margin: 0 auto;">  
        </div>  
    </div>  

    <div class="watermark">  
        <img src="img/pdf/Imagen1.svg" alt="" style="width: 100%; height: auto; position: absolute; top: 0; left: 0; z-index: -1; opacity: 5;">  
    </div>  

    <table>  
        <thead>  
            <tr>  
                <th>Alumno</th>  
                <th>Tutor 1</th>  
                <th>Teléfono Tutor 1</th>  
                <th>Tutor 2</th>  
                <th>Teléfono Tutor 2</th>  
            </tr>  
        </thead>  
        <tbody>  
            @foreach($Alumnos as $alumno)  
            <tr>  
                <td>{{ $alumno->nombre_alumno }}</td>  
                <td>{{ $alumno->nombre_tutor_1 }}</td>  
                <td>{{ $alumno->telefono_tutor_1 }}</td>  
                <td>{{ $alumno->nombre_tutor_2 }}</td>  
                <td>{{ $alumno->telefono_tutor_2 }}</td>  
            </tr>  
            @endforeach  
        </tbody>  
    </table>  

    <div class="footer">  
        <p id="fecha" style="font-style: italic;">"2024, Año de Felipe Carrillo Puerto, Benemérito del Proletariado, Revolucionario y Defensor del Mayab".</p>  
        <p id="direccion" style="text-align: center; color: rgb(105, 11, 47);">"Ranchería San Juan el Alto, 2da sección S/N, C.P. 86850 <br>JALAPA, TABASCO."</p>  
    </div>  

</body>  
</html>