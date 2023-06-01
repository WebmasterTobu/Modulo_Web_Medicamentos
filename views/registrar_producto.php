<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Registrar Producto</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 pt-4">
                <fieldset class="border p-2">
                    <legend class="w-auto"><h1>Registro de Productos</h1></legend>
                    <form action="../controllers/registrar_producto.php" method="post" class="needs-validation">
                        <br>
                        <label for="codigo">Codigo:</label>
                        <input name="codigo" type="codigo" class="form-control" placeholder=""><br>
                        <label for="nombre">Nombre:</label>
                        <input name="nombre" type="nombre" class="form-control" placeholder=""><br>
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <br>
                        <div class="form-group">
                        <select name="estado" id="" class="form-select" aria-label="Default select example">
                            <option selected>Seleccione un Estado</option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select></div><br>
                        <label for="nombre_laboratorio">Nombre de Laboratorio:</label>
                        <input name="nombre_laboratorio" type="nombre_laboratorio" class="form-control" placeholder=""><br>
                        <a href="consulta_producto.php" class="btn btn-success">Regresar</a>
                        <button type="submit" class="btn btn-success ">Enviar</button>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>