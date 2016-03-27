<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <title>PDF Admisiones</title>
    <style>
        html, body {
            padding-left: 10px;
            padding-right: 10px;
            margin-left: 20px;
            margin-right: 20px;
            background-image: url("/resources/images/fondologo.png");
            background-repeat: no-repeat;
            background-position: center;
            background-position: 100% 100%;

        }

        .page-break {
            page-break-after: always;
        }

        th{
            text-align: center;
            background-color: #f2f2f2;
        }
        td{
            text-align: center;
        }
        h3{
            color: #002B7A;
            border-bottom: medium solid #BB8800;
        }
        table {
            border-collapse: collapse;
        }

    </style>
</head>
<body style="">
<div class="clearfix">
    <table style="width:100%">
        <tr>
            <td style="width:25%">
                @include('layouts.generals.pdf.imgEnes')
            </td>
            <td style="width:50%">
                <div align="center">
                    <b>Escuela Nacional de Estudios Superiores, Unidad
                        León</b><br>
                    <b>Departamento de AMINISTRACION ESCOLAR</b>

                    <p>SOLICITUD DE ADMISIÓN DE ESTUDIOS</p>
                </div>
            </td>
        </tr>
    </table>
    <table style="width:100%; margin: 0px; padding: 0px">
        <tr>
            <td style="width:70%;"></td>
            <td style="width:30%;">
                <h2>Solicitud # {{ $applicant['id'] }} </h2>
            </td>
        </tr>
    </table>
    <div align="center">
        <h3>INFORMACIÓN PERSONAL</h3>
        <table width="100%">
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
            </tr>
            <tr>
                <td>{{ $applicant['name'] }} </td>
                <td>{{ $applicant['firstlastname'] }} </td>
                <td>{{ $applicant['secondlastname'] }} </td>
            </tr>
            <tr>
                <th>CURP</th>
                <th>RFC</th>
                <th>Fecha de Nacimiento</th>
            </tr>
            <tr>
                <td>{{ $applicant['curp'] }} </td>
                <td>{{ $applicant['rfc'] }} </td>
                <td>{{ $applicant['birthdate'] }} </td>
            </tr>
            <tr>
                <th>Correo Electrónico</th>
                <th>Nacionalidad</th>
                <th>Estado Civil</th>
            </tr>
            <tr>
                <td>{{ $applicant['email'] }} </td>
                <td>{{ $applicant['nationality'] }} </td>
                <td>{{ $applicant['maritalstatus'] }} </td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <th>Celular</th>
                <th>NSS</th>
            </tr>
            <tr>
                <td>{{ $applicant['telephone'] }} </td>
                <td>{{ $applicant['celphone'] }} </td>
                <td>{{ $applicant['nss'] }} </td>
            </tr>

        </table>
        <div align="center">
            <h3>INFORMACIÓN DE DOMICILIO</h3>
            <table width="100%">
                <tr>
                    <th>Calle</th>
                    <th>No. Interior</th>
                    <th>No. Exterior</th>
                </tr>
                <tr>
                    <td>{{ $applicant['street'] }} </td>
                    <td>{{ $applicant['num_int'] }} </td>
                    <td>{{ $applicant['num_ext'] }} </td>
                </tr>
                <tr>
                    <th>Colonia</th>
                    <th>CP</th>
                    <th>País</th>
                </tr>
                <tr>
                    <td>{{ $applicant['colony'] }} </td>
                    <td>{{ $applicant['zip'] }} </td>
                    <td>{{ $country }} </td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <th>Ciudad</th>
                    <th></th>
                </tr>
                <tr>
                    <td>{{ $state }} </td>
                    <td>{{ $city }} </td>
                </tr>
            </table>
        </div>
        <div align="center">
            <h3>INFORMACIÓN DE ESCOLAR</h3>
            <table width="100%">
                <tr>
                    <th>Nombre escuela</th>
                    <th>Especialidad</th>
                    <th>Promedio</th>
                </tr>
                <tr>
                    <td>{{ $applicant['school_name'] }} </td>
                    <td>{{ $applicant['specialty'] }} </td>
                    <td>{{ $applicant['average'] }} </td>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <th>Mes Inicio</th>
                    <th>Año Inicio</th>
                    <th>Mes Termino</th>
                    <th>Año Termino</th>
                </tr>
                <tr>
                    <td>{{ $applicant['month_start'] }} </td>
                    <td>{{ $applicant['year_start'] }} </td>
                    <td>{{ $applicant['month_end'] }} </td>
                    <td>{{ $applicant['year_end'] }} </td>
                </tr>
            </table>
        </div>
        <div align="center">
            <h3>INFORMACIÓN DE INGRESO</h3>
            <table width="100%">
                <tr>
                    <th>Carrera de Interes</th>
                    <th>No. Cuenta</th>
                </tr>
                <tr>
                    <td>{{ $career }} </td>
                    <td>{{ $applicant['account_number'] }} </td>
                </tr>
            </table>
        </div>
        <hr size=3 width=35% style="margin-top: 50px">
        Firma de el estudiante
    </div>
</div>
</body>
</html>