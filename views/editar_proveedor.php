<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario Registro de Proveedor</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 pt-4">
                <fieldset class="border p-2">
                    <legend class="w-auto"><h1>Formulario Registro de Proveedores</h1></legend>
                    <form method="post" action="../controllers/editar_proveedor.php" class="needs-validation">
                        <br>
                        <div class="form-group">
                        <select name="tipo_documento" id="" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un Documento</option>
                            <option value="Cedula">Cedula</option>
                            <option value="NIT">NIT</option>
                            <option value="Cedula_de_Extrangeria">Cedula de Extrangeria</option>
                            <option value="NIT_de_Extrangeria">NIT de Extrangeria</option>
                        </select></div><br>
                        <label for="numero_id">Numero id:</label>
                        <input name="numero_id" type="numeroid" class="form-control" placeholder=""><br>
                        <label for="nombre">Nombre o Razon Social:</label>
                        <input name="nombre" type="nombre" class="form-control" placeholder=""><br>
                        <label for="direccion">Direccion:</label>
                        <input name="direccion" type="direccion" class="form-control" placeholder=""><br>
                        <label for="nombre_contacto">Nombre de Contacto:</label>
                        <input name="nombre_contacto" type="nombrecontacto" class="form-control" placeholder=""><br>
                        <label for="celular">Celular de Contacto:</label>
                        <input name="celular" type="celular" class="form-control" placeholder=""><br>
                        <div class="dropdown-divider"></div>
                        <br>
                        <a href="consulta_proveedor.php" class="btn btn-success">Regresar</a>
                        <button type="submit" class="btn btn-success ">Enviar</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>