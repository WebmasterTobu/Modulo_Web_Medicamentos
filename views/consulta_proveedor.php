<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <title>Consulta Proveedor</title>
</head>
<body>
<header></header>
	<div class="container">
        <div class="row">
            <div class="col"><h1>CONSULTA DE PROVEEDORES.</h1></div>
            <div class="dropdown-divider"></div>
        </div>
        <div class="row">
            <div class="col">
            <table id="tabla" class="table table-striped table-hover">
		<thead>
			<tr>
				<th scope="col">Tipo_Documento</th>
				<th scope="col">Numero_Id</th>
				<th scope="col">Razon_Social</th>
				<th scope="col">Direccion</th>
                <th scope="col">Nombre_Contacto</th>
                <th scope="col">Celular</th>
				<th scope="col" colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody><?php require'../controllers/consulta_proveedor.php' ?></tbody>
	</table>
	<a class="btn btn-success" href="../index.php">Regresar</a>
	<a class="btn btn-success" href="../views/form_Registro_Proveedor.php">Registrar</a>
            </div>
        </div>
	</div>
</body>
<script>

var tabla = document.querySelector("#tabla");
var dataTable = new DataTable(tabla);

</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>