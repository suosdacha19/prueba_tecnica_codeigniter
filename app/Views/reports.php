<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
		<title>Practice Pharmasan 2!</title>
        <?php require 'partials/header.php' ?>
	</head>
	<body>
		<h1>Reports!</h1>
        <div class="container">
            <table id="reports" class="display" style="width:100%">
                <thead>
                    <th>Expediente</th>
                    <th>Producto</th>
                    <th>Titular</th>
                    <th>Registrosanitario</th>
                    <th>Fechaexpedicion</th>
                    <th>Fechavencimiento</th>
                    <th>Estadoregistro</th>
                    <th>Expedientecum</th>
                    <th>Consecutivocum</th>
                    <th>Cantidadcum</th>
                    <th>Descripcioncomercial</th>
                    <th>Estadocum</th>
                    <th>Fechaactivo</th>
                    <th>Fechainactivo</th>
                    <th>Muestramedica</th>
                    <th>Unidad</th>
                    <th>Atc</th>
                    <th>Descripcionatc</th>
                    <th>Viaadministracion</th>
                    <th>Concentracion</th>
                    <th>Principioactivo</th>
                    <th>Unidadmedida</th>
                    <th>Cantidad</th>
                    <th>Unidadreferencia</th>
                    <th>Formafarmaceutica</th>
                    <th>Nombrerol</th>
                    <th>Tiporol</th>
                    <th>Modalidad</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>


        <script>
            $(document).ready(function() {
                $('#reports').DataTable({
                    ajax:{
                    url: "https://www.datos.gov.co/resource/i7cb-raxc.json",
                    "dataSrc": ""
                    },
                    columns:[
                        { data: "expediente"},
                        { data: "producto"},
                        { data: "titular"},
                        { data: "registrosanitario"},
                        { data: "fechaexpedicion"},
                        { data: "fechavencimiento"},
                        { data: "estadoregistro"},
                        { data: "expedientecum"},
                        { data: "consecutivocum"},
                        { data: "cantidadcum"},
                        { data: "descripcioncomercial"},
                        { data: "estadocum"},
                        { data: "fechaactivo"},
                        { data: "fechainactivo", "defaultContent": ""},
                        { data: "muestramedica"},
                        { data: "unidad"},
                        { data: "atc"},
                        { data: "descripcionatc"},
                        { data: "viaadministracion"},
                        { data: "concentracion", "defaultContent": ""},
                        { data: "principioactivo"},
                        { data: "unidadmedida"},
                        { data: "cantidad"},
                        { data: "unidadreferencia", "defaultContent": ""},
                        { data: "formafarmaceutica"},
                        { data: "nombrerol"},
                        { data: "tiporol"},
                        { data: "modalidad"}
                    ],
                    "columnsDefs": [
                        {
                        }
                    ],
                    "scrollX": true,
                    deferRender:    true,
                    scrollY:        400,
                    scrollCollapse: true,
                    scroller:       true,
                    dom: 'Bfrtip',
                    buttons: [
                        'csv'
                    ]
                });
            });
        </script>
	</body>
</html>
